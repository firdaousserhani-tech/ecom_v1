<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Setup writable paths in Vercel's /tmp directory
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0755, true);
    mkdir($storagePath . '/framework/sessions', 0755, true);
    mkdir($storagePath . '/framework/views', 0755, true);
    mkdir($storagePath . '/framework/cache', 0755, true);
}

// 2. Force environment variables for a read-only filesystem
putenv("APP_CONFIG_CACHE=/tmp/config.php");
putenv("APP_ROUTES_CACHE=/tmp/routes.php");
putenv("APP_SERVICES_CACHE=/tmp/services.php");
putenv("APP_PACKAGES_CACHE=/tmp/packages.php");
putenv("VIEW_COMPILED_PATH=/tmp/framework/views");
putenv('CACHE_DRIVER=array');
putenv('LOG_CHANNEL=stderr');
putenv('SESSION_DRIVER=cookie');

// 3. Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// 4. Bootstrap Laravel
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// 5. Bind the new storage path
$app->useStoragePath($storagePath);

// 6. Handle the Request (Laravel 11 Style)
$app->handleRequest(Request::capture());
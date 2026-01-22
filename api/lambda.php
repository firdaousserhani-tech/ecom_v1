<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. التأكد من مسار ملف الصيانة [cite: 111]
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 2. تحميل ملفات autoload (تأكدي من وجود ../ حيت الملف داخل مجلد api) [cite: 115]
require __DIR__.'/../vendor/autoload.php';

// 3. تشغيل الـ Bootstrap [cite: 118]
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// 4. التعامل مع الطلب وإرسال الرد (هذا هو الجزء الأهم لـ Vercel)
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// هاد السطور مهمة بزاف باش Laravel يعرف فين يحط الكاش والملفات المؤقتة في Vercel
$app->useStoragePath('/tmp');
$app->instance('path.storage', '/tmp');

// هاد الجزء هو اللي كيخلي السرفر يجاوب على الطلبات
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
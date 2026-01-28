<?php
return [
    'db' => [
        'host' => getenv('DB_HOST') ?: 'localhost',
        'name' => getenv('DB_NAME') ?: 'shorts_scheduler',
        'user' => getenv('DB_USER') ?: 'root',
        'pass' => getenv('DB_PASS') ?: '',
        'charset' => 'utf8mb4',
    ],
    'app' => [
        'name' => getenv('APP_NAME') ?: 'ShortsScheduler Pro',
        'base_url' => getenv('APP_BASE_URL') ?: 'http://localhost',
        'env' => getenv('APP_ENV') ?: 'local',
        'app_key' => getenv('APP_KEY') ?: 'change-me-32-bytes-minimum',
        'timezone' => getenv('APP_TIMEZONE') ?: 'Europe/Istanbul',
    ],
    'session' => [
        'name' => 'ssp_session',
        'secure' => false,
        'httponly' => true,
        'samesite' => 'Lax',
    ],
];

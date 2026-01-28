<?php
require_once __DIR__ . '/../app/Helpers/helpers.php';
require_once __DIR__ . '/../app/Core/Database.php';

$config = require __DIR__ . '/../app/config.php';

$lockFile = __DIR__ . '/../storage/cron.lock';
$lockHandle = fopen($lockFile, 'c');
if ($lockHandle === false) {
    exit(1);
}

if (!flock($lockHandle, LOCK_EX | LOCK_NB)) {
    exit;
}

$logFile = __DIR__ . '/../storage/logs/cron.log';
file_put_contents($logFile, '[' . date('c') . "] Cron başlatıldı\n", FILE_APPEND);

// TODO: job_queue tablosundan işleri çek ve işle.

file_put_contents($logFile, '[' . date('c') . "] Cron tamamlandı\n", FILE_APPEND);
flock($lockHandle, LOCK_UN);
fclose($lockHandle);

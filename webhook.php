<?php

date_default_timezone_set('Asia/Kolkata');

$log = [
    'time' => date('Y-m-d H:i:s'),
    'post' => $_POST,
    'get' => $_GET,
];

file_put_contents(
    __DIR__ . '/log.txt',
    print_r($log, true),
    FILE_APPEND
);

echo "OK";
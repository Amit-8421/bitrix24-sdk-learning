<?php

$data = [
    'time' => date('Y-m-d H:i:s'),
    'method' => $_SERVER['REQUEST_METHOD'],
    'post' => $_POST,
    'raw' => file_get_contents('php://input'),
];

file_put_contents(
    __DIR__ . '/request.txt',
    print_r($data, true) . PHP_EOL .
    str_repeat('-', 80) . PHP_EOL,
    FILE_APPEND
);

echo "OK";
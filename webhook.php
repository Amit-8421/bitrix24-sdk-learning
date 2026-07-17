<?php

file_put_contents(
    __DIR__ . "/hit.txt",
    "Webhook Hit - " . date("Y-m-d H:i:s") . PHP_EOL,
    FILE_APPEND
);

echo "OK2";
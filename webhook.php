<?php

http_response_code(200);

file_put_contents(
    __DIR__ . '/request.txt',
    print_r($_REQUEST, true),
    FILE_APPEND
);

echo "OK";
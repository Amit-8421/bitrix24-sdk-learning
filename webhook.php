<?php

echo "<pre>";
print_r($_POST);

file_put_contents(
    __DIR__ . '/debug.txt',
    print_r($_POST, true)
);

exit;
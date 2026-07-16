<?php

header('Content-Type: application/json');

echo json_encode([
    'request' => $_REQUEST,
    'post'    => $_POST,
    'get'     => $_GET,
]);
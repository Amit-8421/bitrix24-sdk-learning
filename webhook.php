<?php

$config = require 'config.php';

$webhook = rtrim($config['bitrix_webhook'], '/') . '/';

$data = [
    'fields' => [
        'TITLE' => 'Webhook Test Deal - ' . date('Y-m-d H:i:s')
    ]
];

$ch = curl_init($webhook . 'crm.deal.add.json');

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
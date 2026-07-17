<?php

require 'vendor/autoload.php';

$config = require 'config.php';

use Bitrix24\SDK\Services\ServiceBuilderFactory;

$serviceBuilder = ServiceBuilderFactory::createServiceBuilderFromWebhook(
    $config['bitrix_webhook']
);

// Lead create hui ya nahi
$leadId = $_POST['data']['FIELDS']['ID'] ?? 0;

if (!$leadId) {
    exit("No Lead ID");
}

// Dummy Contact Create
$result = $serviceBuilder
    ->getCRMScope()
    ->contact()
    ->add([
        'NAME' => 'Webhook Test',
        'PHONE' => [
            [
                'VALUE' => '9999999999',
                'VALUE_TYPE' => 'WORK'
            ]
        ]
    ]);

echo "Contact Created";
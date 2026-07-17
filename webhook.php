<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Bitrix24\SDK\Services\ServiceBuilderFactory;

$config = require 'config.php';

$leadId = (int)$_POST['data']['FIELDS']['ID'];

$b24 = ServiceBuilderFactory::createServiceBuilderFromWebhook(
    $config['bitrix_webhook']
);

$response = $b24->core->call('crm.lead.get', [
    'id' => $leadId
]);

$lead = $response->getResponseData()->getResult();

file_put_contents(
    __DIR__ . '/lead.txt',
    print_r($lead, true)
);

echo "OK";
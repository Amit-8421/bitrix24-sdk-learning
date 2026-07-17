<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Bitrix24\SDK\Services\ServiceBuilderFactory;

$config = require __DIR__ . '/config.php';

$leadId = intval($_POST['data']['FIELDS']['ID'] ?? 0);

if ($leadId === 0) {
    exit('No Lead ID');
}

try {

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

} catch (\Throwable $e) {

    file_put_contents(
        __DIR__ . '/error.txt',
        $e->getMessage()
    );

    echo "ERROR";
}
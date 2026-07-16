<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Bitrix24\SDK\Services\ServiceBuilderFactory;

$config = require 'config.php';

$webhookUrl = $config['bitrix_webhook'];


$b24 = ServiceBuilderFactory::createServiceBuilderFromWebhook($webhookUrl);

$response = $b24->core->call('user.current');

$result = $response->getResponseData()->getResult();

echo "<pre>";
print_r($result);
echo "</pre>";


<?php


use BotFaas\QQGuild\DTO\MessageToCreate;
use BotFaas\QQGuild\OpenAPI;

require_once '../vendor/autoload.php';

$openapi = new OpenAPI('app_id', 'app_token');

$data = $openapi->MessageAPI()->PostMessage('channel_id', new MessageToCreate([
    'content' => '看看猫咪'
]));

print_r($data);

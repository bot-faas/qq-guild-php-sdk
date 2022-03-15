<?php


use BotFaas\QQGuild\DTO\MessageToCreate;
use BotFaas\QQGuild\OpenAPI;

$openapi = new OpenAPI('app_id', 'app_token');

$data = $openapi->MessageAPI()->PostMessage('channel_id', new MessageToCreate([
    'content' => '看看猫咪'
]));

print_r($data);

<?php


use BotFaas\QQGuild\DTO\MessageToCreate;
use BotFaas\QQGuild\OpenAPI;

$openapi = new OpenAPI('app_id', 'app_token');

$msg = new MessageToCreate();

$msg->content = '看看猫咪';
$data = $openapi->MessageAPI()->PostMessage('channel_id', $msg);

print_r($data);

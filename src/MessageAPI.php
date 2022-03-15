<?php

namespace BotFaas\QQGuild;

use BotFaas\QQGuild\DTO\MessageToCreate;

class MessageAPI
{
    private OpenAPI $openapi;

    public function __construct($openapi)
    {
        $this->openapi = $openapi;
    }

    public function PostMessage(string $channel_id, MessageToCreate $msg)
    {
        return $this->openapi->request("/channels/{$channel_id}/messages", 'POST', $msg);
    }

}
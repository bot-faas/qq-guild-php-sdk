<?php

namespace BotFaas\QQGuild\DTO;

class MessageReference
{
    public string $message_id;               // 消息 id
    public bool $ignore_get_message_error; // 是否忽律获取消息失败错误
}
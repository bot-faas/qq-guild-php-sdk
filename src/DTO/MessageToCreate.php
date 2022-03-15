<?php

namespace BotFaas\QQGuild\DTO;

class MessageToCreate extends DTO
{
    public string $content;
    public Embed $embed;
    public Ark $ark;
    public string $image;
    public string $msg_id; // 要回复的消息id，为空是主动消息，公域机器人会异步审核，不为空是被动消息，公域机器人会校验语料
    public MessageReference $message_reference;
    public Markdown $markdown;

}
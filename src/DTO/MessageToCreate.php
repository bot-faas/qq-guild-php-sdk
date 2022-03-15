<?php

namespace BotFaas\QQGuild\DTO;

class MessageToCreate extends DTO
{
    public string $content;
    /**
     * @var Embed
     */
    public $embed;
    /**
     * @var Ark
     */
    public $ark;
    public string $image;
    public string $msg_id; // 要回复的消息id，为空是主动消息，公域机器人会异步审核，不为空是被动消息，公域机器人会校验语料
    /**
     * @var MessageReference
     */
    public $message_reference;
    /**
     * @var Markdown
     */
    public $markdown;

}

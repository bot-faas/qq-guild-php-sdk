<?php

namespace BotFaas\QQGuild\DTO;

class Message
{
    // 消息ID
    public string $id;
    // 子频道ID
    public string $channel_id;
    // 频道ID
    public string $guild_id;
    // 内容
    public string $content;
    // 发送时间
    public string $timestamp;
    // 消息编辑时间
    public string $edited_timestamp;
    // 是否@all
    public bool $mention_everyone;
    /**
     * 消息发送方
     * @var User
     */
    public $author;
    /**
     * 消息发送方Author的member属性，只是部分属性
     * @var Member
     */
    public $member;
    /**
     * 附件
     * @var MessageAttachment[] $attachments
     */
    public array $attachments;
    /**
     * 结构化消息-embeds
     * @var Embed[] $embeds
     */
    public array $embeds;
    /**
     * 消息中的提醒信息(@)列表
     * @var User[] $mentions
     */
    public array $mentions;
    /**
     * ark 消息
     * @var Ark $ark
     */
    public $ark;
    // 私信消息
    public bool $direct_message;
    // 子频道 seq，用于消息间的排序，seq 在同一子频道中按从先到后的顺序递增，不同的子频道之前消息无法排序
    public string $seq_in_channel;
}
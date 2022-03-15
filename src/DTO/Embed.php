<?php

namespace BotFaas\QQGuild\DTO;

class Embed
{
	public string $title;
	public string $description;
	public string $prompt; // 消息弹窗内容，消息列表摘要
	public string $timestamp;
	/**
	 * @var EmbedField[]
	 */
	public array $fields;
}

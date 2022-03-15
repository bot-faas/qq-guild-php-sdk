<?php

namespace BotFaas\QQGuild\DTO;

class Member
{
	public string $guild_id;
	public string $joined_at;
	public string $nick;
	public User $user;
	public array $roles;
}

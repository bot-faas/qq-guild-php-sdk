<?php

namespace BotFaas\QQGuild\DTO;

class Member
{
    public string $guild_id;
    public string $joined_at;
    public string $nick;
    /**
     * @var User
     */
    public $user;
    public $roles;
}

<?php

namespace BotFaas\QQGuild\DTO;
//(\w+)\s+([^\s]+)\s+`json:"(.*?)"`
//public $2 \$$3;

class User
{
    public string $id;
    public string $username;
    public string $avatar;
    public bool $bot;
    public string $union_openid;       // 特殊关联应用的 openid
    public string $union_user_account; // 机器人关联的用户信息，与union_openid关联的应用是同一个
}

<?php

namespace BotFaas\QQGuild\DTO;

class DTO
{
    public function __construct($data)
    {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }
}
<?php

namespace BotFaas\QQGuild;

class OpenAPI
{
    /**
     * @var string
     */
    private string $Authorization;
    /**
     * @var string
     */
    private string $url;

    public function __construct($bot_app_id, $bot_token, $isSandBox = false)
    {
        $this->Authorization = "Bot {$bot_app_id}.{$bot_token}";
        if ($isSandBox) {
            $this->url = 'https://sandbox.api.sgroup.qq.com';
        } else {
            $this->url = 'https://api.sgroup.qq.com';
        }
    }

    public function request($funcName, $method = 'GET', $data = null)
    {
        try {
            $ch = curl_init();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: ' . $this->Authorization;
            $url = $this->url . $funcName;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            if ($data) {
                $data = json_encode($data);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            }
            if ($method == 'POST') {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_POST, true);
            }
            if ($method == 'PUT') {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            }
            if ($method == 'DELETE') {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            }
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $output = curl_exec($ch);
            curl_close($ch);
            return json_decode($output, true);
        } catch (\Exception $e) {
            print_r($e);
            return false;
        }
    }

    public function MessageAPI(): MessageAPI
    {
        return new MessageAPI($this);
    }
}

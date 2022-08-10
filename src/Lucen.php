<?php

namespace kilyte\lucen\SDK;

use GuzzleHttp\Client;
use stdClass;

class Lucen extends KYC
{
    protected $client;

    public function __construct(string $baseDomain, string $username, string $apiKey)
    {
        $this->client = new Client([
            'base_uri' => $baseDomain,
            'headers' => [
                'apikey' => $apiKey,
                'username' => $username,
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json'
            ]
        ]);
    }

    public function submit_task(array $options): stdClass
    {
        $kcy = $this->submit($options);
        return json_decode(json_encode($kcy));
    }

    public function get_task($task): stdClass
    {
        $kcy = $this->get($task);
        return json_decode(json_encode($kcy));
    }
}

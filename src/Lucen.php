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

    public function get_bronze($id): stdClass
    {
        $kcy = $this->bronze($id);
        return json_decode(json_encode($kcy));
    }

    public function get_silver($id): stdClass
    {
        $kcy = $this->silver($id);
        return json_decode(json_encode($kcy));
    }

    public function get_gold($id): stdClass
    {
        $kcy = $this->gold($id);
        return json_decode(json_encode($kcy));
    }
}

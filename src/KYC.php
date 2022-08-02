<?php

namespace kilyte\lucen\SDK;

use stdClass;

class KYC extends Service
{

    public function bronze($id): array
    {
        if (empty($id))
            return $this->error("ID is required");
        $response = $this->client->get("bronze/$id");
        return $this->success($response);
    }

    public function silver($id): array
    {
        if (empty($id))
            return $this->error("ID is required");
        $response = $this->client->get("silver/$id");
        return $this->success($response);
    }

    public function gold($id): array
    {
        if (empty($id))
            return $this->error("ID is required");
        $response = $this->client->get("gold/$id");
        return $this->success($response);
    }
}

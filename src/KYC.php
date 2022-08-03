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

    public function vehicle($registration): array
    {
        if (empty($registration))
            return $this->error("Vehicle registration is required");
        $response = $this->client->get("vehicle/$registration");
        return $this->success($response);
    }

    public function pin($pin): array
    {
        if (empty($pin))
            return $this->error("PIN is required");
        $response = $this->client->get("pin/$pin");
        return $this->success($response);
    }
}

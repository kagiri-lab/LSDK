<?php

namespace kilyte\lucen\SDK;


class KYC extends Service
{

    public function submit(array $options): array
    {
        if (empty($options))
            return $this->error("Options are required");
        $response = $this->client->post("api/task/submit", [ 'json' => $options]);
        return $this->success($response);
    }

    public function get(array $task): array
    {
        if (empty($task))
            return $this->error("Query ID is required");
        $response = $this->client->post("api/task/get", ['json' => $task]);
        return $this->success($response);
    }
}

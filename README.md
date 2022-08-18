# LSDK

Get started with Lucen SDK

## Installation

```bash

composer require kilyte/lsdk

```

## Usage

```php
use kilyte\lucen\SDK\Lucen;

$domain = "";
$username = "";
$apikey = "";

$lucen = new Lucen($domain, $username, $apikey);
$data = [
    ['query' => '10101010', 'type' => 'idno']
];

$task = $lucen->submit_task($data);

```

## Response

```text

stdClass Object ( [status] => success [data] => Array ( [0] => stdClass Object ( [10101010] => stdClass Object ( [task] => jhfdureiuyerueyr ) ) ) )

```

## Query Results

```php

$lucen = new Lucen($domain, $username, $apikey);
$task = $lucen->get_task([[
     'query' => '10101010',
     'task' => 'jhfdureiuyerueyr'
]]);


```

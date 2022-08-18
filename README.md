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
    ['query' => '00000000', 'type' => 'idno']
];

$task = $lucen->submit_task($data);

```

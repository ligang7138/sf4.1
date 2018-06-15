<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-6-15
 * Time: 上午9:25
 */

use Hprose\Http\Client;
require __DIR__.'/../vendor/autoload.php';

$client = Client::create('http://localhost:8001', false);
echo 323;
var_dump($client->hello("World", new InvokeSettings(array('mode' => ResultMode::Normal))));
var_dump($client->hello("World", new InvokeSettings(array('mode' => ResultMode::Serialized))));
var_dump($client->hello("World", new InvokeSettings(array('mode' => ResultMode::Raw))));
var_dump($client->hello("World", new InvokeSettings(array('mode' => ResultMode::RawWithEndTag))));
<?php

require_once('./vendor/autoload.php');

use App\Geoip2Locator;

$geoip = new Geoip2Locator();

$iso = $geoip->getIsoCodeByIp('127.0.0.1');

dump($iso);
# GEOIP2 Database Wrapper #

## Description ##

This wrapper offers an easy implementation the official MaxMind library. MaxMind DB is a binary file format that stores data indexed by IP address subnets (IPv4 or IPv6).

## Usage ##

## Example ##

```php
<?php
require_once('./vendor/autoload.php');

use App\Geoip2Locator;

$geoip = new Geoip2Locator();

$iso = $geoip->getIsoCodeByIp('0.0.0.0');

// get returns just the record for the IP address
print_r($iso);

```

## Requirements  ##

* This library requires PHP 7.2 or greater.
* A GeoIP2 Country database is required.\
MMDB Country database file must be placed at `/usr/share/GeoIP/GeoIP2-Country.mmdb`
Please refer to [MaxMind website](https://www.maxmind.com/en/geoip2-country-database)

<?php

namespace App;

use GeoIp2\Database\Reader;

class Geoip2Locator {

    const DATABASE_FILEPATH = '/usr/share/GeoIP/GeoIP2-Country.mmdb';

    private $client = null;

    public function __construct() {

        if (!file_exists(self::DATABASE_FILEPATH)) {
            throw new \Exception("'" . self::DATABASE_FILEPATH ."' is mandatory");
        }

        $this->client = new Reader(self::DATABASE_FILEPATH);
    }

    
    public function getIsoCodeByIp($ip) : ?string {

        $iso = null;

        try{
            $record = $this->client->country($ip);
            $iso = $record->country->isoCode;
        }catch(\Exception $e){}
        
        return $iso;
    }


    public function __destruct() {
        $this->client = null;
    }
    
}
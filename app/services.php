<?php

use Igdb\Client as Igdb;
use GuzzleHttp\Client as GuzzleHttp;

$app['igdb'] = function() {
    return new Igdb(new GuzzleHttp(), 'API_KEY_HERE');
};
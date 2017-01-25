<?php

use Silex\Provider\TwigServiceProvider;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../app/Resources/views',
));
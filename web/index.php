<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

// Add providers
require_once __DIR__ . '/../app/providers.php';

// Add services
require_once __DIR__ . '/../app/services.php';

// Add routes
require_once __DIR__ . '/../app/routes.php';

// Activate debug mode
$app['debug'] = true;

$app->run();
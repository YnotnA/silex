<?php

use Antho\MyApp\Controller\Provider\GameControllerProvider;

$app->mount("/game", new GameControllerProvider());
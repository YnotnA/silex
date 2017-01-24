<?php

namespace Antho\MyApp\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class GameControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        $controllers->get('/', 'Antho\\MyApp\\Controller\\GameController::index')
        ->before(function(){
        	echo 'before !!!';
        });

        $controllers->get("/{id}", "Antho\\MyApp\\Controller\\GameController::show");

        /*$controllers->before(function(){
        	echo 'before !!!';
        });*/

        return $controllers;
    }
}
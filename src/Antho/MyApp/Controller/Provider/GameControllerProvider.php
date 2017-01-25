<?php

namespace Antho\MyApp\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Antho\MyApp\Controller\GameController;

class GameControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];
        $gc = new GameController($app);

        $controllers->get('/', function() use ($gc) {
            return $gc->index();
        });
        
        /*
        ->before(function(){
        	echo 'before !!!';
        });*/

        $controllers->get("/{name}", function($name) use ($gc) {
            return $gc->show($name);
        });

        /*$controllers->before(function(){
        	echo 'before !!!';
        });*/

        return $controllers;
    }
}
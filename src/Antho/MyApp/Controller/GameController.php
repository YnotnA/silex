<?php

namespace Antho\MyApp\Controller;

use Silex\Application;

class GameController
{
    /**
     * Silex Application
     * @var Application
     */
    private $app;

    /**
     * @param Application
     */
    public function __construct(Application $app){
        $this->app = $app;
    }

    public function index(){
        return $this->app['twig']->render('base.html.twig');
    }

    public function show($name){

        $games = $this->app['igdb']->searchGames($name);
        var_dump($games);

        return $this->app['twig']->render('game/show.html.twig', array(
            'games' => json_decode($games),
        ));
    }
}
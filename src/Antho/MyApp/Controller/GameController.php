<?php

namespace Antho\MyApp\Controller;

class GameController
{

    public function index(){
        return 'plop';
        // show the list of users
    }

    public function edit($id){
        // show edit form
    }

    public function show($id){
        return 'Coucou ' . $id;
    }

    /*public function store(){
        // create a new user, using POST method
    }
    
    public function update($id){
        // update the user #id, using PUT method
    }

    public function destroy($id){
        // delete the user #id, using DELETE method
    }*/
}
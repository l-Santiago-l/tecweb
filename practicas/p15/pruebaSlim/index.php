<?php
    require 'vendor/autoload.php';
    $app = new Slim\App();
    $app ->get('/', function($request, $response, $args){
        $response->write("Hola mundo Slim :D");
        return $response;
    });

    $app->run();
?>
<?php

require_once "vendor/autoload.php";

$app = new Silex\Application;

$app['debug'] = true;

//rota 
$app->get("/", function(){
    return " Hello World!";
});

$app->run();
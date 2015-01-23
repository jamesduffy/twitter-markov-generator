<?php

/*
|--------------------------------------------------------------------------
| Set the Routes
|--------------------------------------------------------------------------
|
| Here we define all the routes the application's API will accept
|
*/

$router->respond('/install', function($request){
    return 'Install';
});

$router->with('/api', function () use ($router) {

    $router->respond('GET', '/?', function ($request, $response) {
        return 'this is the api';
    });

    $router->respond('GET', '/[:id]', function ($request, $response) {
        // Show a single user
    });

});

$router->respond('GET', '/?', function ($request, $response, $service) {
    $service->render(__DIR__.'/views/frontend.php');
});
<?php
declare(strict_types=1);

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

require "vendor/autoload.php";

$router = new RouteCollector;

$router->get("/", function() {
    return "this is the homepage";
});

$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER["REQUEST_METHOD"], $path);

echo $response;










// $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// require_once "Router.php";
// $router = new Router;

// $router->add("/", function() {
//     echo "This is the homepage";
// });

// $router->add("/dashboard", function() {
//     echo "This is the admin dashboard";
// });

// $router->add("/user", function() {
//     echo "This is the user dashboard";
// });

// $router->dispatch($path);

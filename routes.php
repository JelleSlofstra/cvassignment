<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

$router->get('', 'app/Http/Controllers/HomeController.php@index');

if ($middleware->isLoggedIn) {
    $router->get('users', 'app/Http/Controllers/UserController.php@index');
}

$router->get('login', 'app/Http/Controllers/LoginController.php');
$router->get('logout', 'app/Http/Controllers/LoginController.php@logout');
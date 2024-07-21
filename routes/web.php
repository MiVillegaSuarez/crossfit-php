<?php

use Controllers\RoutesController;
use Controllers\CreateAccountController;
use Controllers\ForgotPasswordController;
use Controllers\HomeController;
use Controllers\LoginController;

RoutesController::getRoute('/', [LoginController::class, 'login']);

RoutesController::getRoute('/create-account', [CreateAccountController::class, 'createAccount']);

RoutesController::getRoute('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);

RoutesController::getRoute('/home', [HomeController::class, 'home']);


// Rutas con parametros
RoutesController::getRoute('/home/post/:slug', function($slug) {
    return 'Hola post: ' . $slug;
});

//Rutas especiales
RoutesController::postRoute('/login-validation', [LoginController::class, 'loginValidation']);

RoutesController::dispatch();
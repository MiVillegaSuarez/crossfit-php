<?php

use Controllers\RoutesController;
use Controllers\CreateAccountController;
use Controllers\ForgotPasswordController;
use Controllers\NewPasswordController;
use Controllers\HomeController;
use Controllers\LoginController;

RoutesController::getRoute('/', [LoginController::class, 'login']);

RoutesController::getRoute('/create-account', [CreateAccountController::class, 'createAccount']);

RoutesController::getRoute('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);

RoutesController::getRoute('/new-password', [NewPasswordController::class, 'newPassword']);

RoutesController::getRoute('/home', [HomeController::class, 'home']);


// Rutas con parametros
RoutesController::getRoute('/home/post/:slug', function($slug) {
    return 'Hola post: ' . $slug;
});

//Rutas especiales
RoutesController::postRoute('/login-validation', [LoginController::class, 'loginValidation']);
RoutesController::postRoute('/create-account-validation', [CreateAccountController::class, 'createValidation']);
RoutesController::getRoute('/logout-validation', [HomeController::class, 'logoutUser']);
RoutesController::postRoute('/forgot-validation', [ForgotPasswordController::class, 'forgotValidation']);
RoutesController::postRoute('/new-password-validation', [NewPasswordController::class, 'newPasswordValidation']);


RoutesController::dispatch();
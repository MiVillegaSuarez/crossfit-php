<?php

require_once __DIR__."/../controllers/ForgotPassWord.php";

$controller = new ForgotPasswordController();
$controller->forgotPassword();
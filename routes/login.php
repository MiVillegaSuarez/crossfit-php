<?php
session_start();
require_once __DIR__ . "/../controllers/LoginController.php";

$controller = new LoginController();
$controller->login();

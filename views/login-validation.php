<?php

use Controllers\LoginController;

$validation = new LoginController();
$validation->authenticateUser($_POST);

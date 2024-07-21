<?php

use Controllers\CreateAccountController;

$validation = new CreateAccountController();
$validation->createNewUser($_POST);
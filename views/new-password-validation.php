<?php

use Controllers\NewPasswordController;

$validation = new NewPasswordController();
$validation->createNewPassword($_POST);
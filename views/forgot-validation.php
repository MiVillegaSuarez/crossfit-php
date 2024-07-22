<?php

use Controllers\ForgotPasswordController;

$validation = new ForgotPasswordController();
$validation->resetPassword($_POST);

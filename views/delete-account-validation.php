<?php

use Controllers\deleteAccountController;

$validation = new deleteAccountController();
$validation->deletedAccount($_POST);

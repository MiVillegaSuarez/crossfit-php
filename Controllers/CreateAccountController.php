<?php

namespace Controllers;

class CreateAccountController extends Controller {

    public function createAccount() {
        // include __DIR__."/../views/createAccountView.php";
        return $this->view('createAccount');
    }
}
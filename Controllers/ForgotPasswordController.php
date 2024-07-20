<?php

namespace Controllers;

class ForgotPasswordController extends Controller {

    public function forgotPassword() {
        // include __DIR__ . "/../views/forgotPasswordView.php";
        return $this->view('ForgotPassword');
    }
}
<?php
// require_once __DIR__ . "/../models/connection.php";

namespace Controllers;

class LoginController extends Controller {

    public function login() {
        // include __DIR__ . "/../views/loginView.php";
        return $this->view('login');
    }
}
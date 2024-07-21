<?php
namespace Controllers;

use Models\UsersModel;
class CreateAccountController extends Controller {

    public function createAccount() {
        // include __DIR__."/../views/createAccountView.php";
        
        return $this->view('createAccount', [
            'title' => 'Crear una Cuenta | El Camino Hacia Una Mejor Salud'
        ]);
    }
}
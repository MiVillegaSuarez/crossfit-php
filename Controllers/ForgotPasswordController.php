<?php
namespace Controllers;

use Models\UsersModel;

class ForgotPasswordController extends Controller {

    public function forgotPassword() {
        // include __DIR__ . "/../views/forgotPasswordView.php";
        
        return $this->view('ForgotPassword', [
            'title' => 'Recuperar Contraseña | El Camino Hacia Una Mejor Salud'
        ]);
    }
}
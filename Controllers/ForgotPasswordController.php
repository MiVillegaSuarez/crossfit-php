<?php
namespace Controllers;

use Models\UsersModel;

class ForgotPasswordController extends Controller {

    public function forgotPassword() {
        
        return $this->view('ForgotPassword', [
            'title' => 'Recuperar Contraseña | El Camino Hacia Una Mejor Salud'
        ]);
    }
}
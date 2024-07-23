<?php
namespace Controllers;

session_start();
use Models\UsersModel;

class ForgotPasswordController extends Controller {

    public function forgotPassword() {
        
        return $this->view('forgotPassword', [
            'title' => 'Recuperar Contraseña | El Camino Hacia Una Mejor Salud'
        ]);
    }

    public function forgotValidation() {

        return $this->view('forgot-validation');
    }

    public function resetPassword($data) {
        $emailForm = $data["email"];

        $usersModel = new UsersModel();
        $dataQuery = $usersModel->where('email', $emailForm)->first();
        
        if(!empty($usersModel->where('email', $emailForm)->first())) {
            $emailUser = $dataQuery["email"];

            $_SESSION["email_new_password"] = $emailUser;

            // var_dump($_SESSION["email_new_password"]);
            header("Location: /new-password");

        } else {
            header("Location: /forgot-password");
            return;
        }
        
    }
}
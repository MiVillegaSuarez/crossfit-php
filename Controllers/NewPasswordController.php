<?php
namespace Controllers;

session_start();
use Models\UsersModel;

class NewPasswordController extends Controller {

    public function newPassword() {
        
        return $this->view('newPassword', [
            'title' => 'Crea Nueva Contraseña | El Camino Hacia Una Mejor Salud'
        ]);
    }

    public function newPasswordValidation() {
        
        return $this->view('new-password-validation');
    }

    public function createNewPassword($data) {
        
        $emailForm = $data["email"];
        $passForm = md5($data["new-password"]);
        
        $usersModel = new UsersModel();
        $dataQuery = $usersModel->where('email', $emailForm)->first();

        $idUser = $dataQuery["id_user"];
        $nameUser = $dataQuery["first_name"];
        $lastNameUser = $dataQuery["last_name"];
        $bithUser = $dataQuery["birth"];
        $emailUser = $dataQuery["email"];

        $usersModel->update($idUser, [
            'first_name' => $nameUser,
            'last_name' => $lastNameUser,
            'birth' => $bithUser,
            'email' => $emailUser,
            'password' => $passForm
        ]);
        
        unset($_SESSION["email_new_password"]);
        session_destroy();
        header("Location: /");
    }
}
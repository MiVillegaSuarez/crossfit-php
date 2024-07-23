<?php
namespace Controllers;

session_start();
use Models\UsersModel;

class DeleteAccountController extends Controller {

    public function deleteAccount() {
        
        return $this->view('deleteAccount', [
            'title' => 'Eliminar Cuenta | El Camino Hacia Una Mejor Salud'
        ]);
    }

    public function deleteAccountValidation() {

        return $this->view('delete-account-validation');
    }

    public function deletedAccount($data) {
        $emailForm = $data["email"];
        $usersModel = new UsersModel();
        $dataQuery = $usersModel->where('email', $emailForm)->first();
        
        if(!empty($dataQuery)) {
            $idUser = $dataQuery["id_user"];
            $usersModel->delete($idUser);
            header("Location: /");
        } else {
            header("Location: /");
            return;
        }
    }
}
<?php
namespace Controllers;

use Models\UsersModel;
class CreateAccountController extends Controller {

    public function createAccount() {
        $days = range(1, 31);
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $years = range(2011, 1926);

        return $this->view('createAccount', [
            'title' => 'Crear una Cuenta | El Camino Hacia Una Mejor Salud',
            'days' => $days,
            'months' => $months,
            'years' => $years
        ]);
    }

    public function createValidation() {
        return $this->view('create-account-validation');
    }

    public function createNewUser($data) {
        $nameForm = $data["first_name"];
        $lastNameForm = $data["last_name"];
        $dateBirthForm = $data["day"].'-'.$data["month"].'-'.$data["year"];
        $emailForm = $data["email"];
        $passForm = md5($data["password"]);
        $pass2Form = md5($data["password-2"]);

        if(isset($nameForm) && isset($lastNameForm) && isset($dateBirthForm) && isset($emailForm) && isset($passForm) && isset($pass2Form)) {
            if($passForm === $pass2Form) {
                $usersModel = new UsersModel();
                $usersModel->create([
                    'first_name' => $nameForm,
                    'last_name' => $lastNameForm,
                    'birth' => $dateBirthForm,
                    'email' => $emailForm,
                    'password' => $passForm
                ]);

                header("Location: /");
                return;
            } else {
                header("Location: /create-account");
                return;    
            }
        } else {
            header("Location: /create-account");
            return;
        }
    }
}
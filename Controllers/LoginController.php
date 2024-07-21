<?php
namespace Controllers;

session_start();
use Models\UsersModel;

class LoginController extends Controller {

    public function login() {
        // $usersModel = new UsersModel();

        // return $usersModel->all();
        // return $usersModel->find(2);
        // return $usersModel->where('email', 'mivillegasuarez@gmail.com')->first();
        // return $usersModel->where("first_name", "Miguel")->get();
        // return $usersModel->where("first_name", "Miguel' OR 'a' = '")->get();
        // return $usersModel->create([
        //     'first_name' => 'Marcos',
        //     'last_name' => 'Jimenez Cortes',
        //     'birth' => '1989-01-15',
        //     'email' => 'marcoscortes@gmail.com',
        //     'password' => '2b73dc932975831609bcccfb0a64e1d5'
        // ]);
        // return $usersModel->update(4, [
        //     'first_name' => 'Marcos',
        //     'last_name' => 'Jimenez Cortes',
        //     'birth' => '1989-01-13',
        //     'email' => 'marcoscortes@gmail.com',
        //     'password' => '2b73dc932975831609bcccfb0a64e1d5'
        // ]);
        // $usersModel->delete(3);
        
        return $this->view('login', [
            'title' => 'Login | El Camino Hacia Una Mejor Salud'
        ]);
    }

    public function loginValidation() {        
        return $this->view('login-validation');
    }

    public function authenticateUser($data) {
        $emailForm = $data["email"];
        $passForm = $data["password"];

        if(isset($emailForm) && isset($passForm)) {
            $usersModel = new UsersModel();
            if($usersModel->where('email', '=', $emailForm)->first()) {
                if($usersModel->where('password', '=', md5($passForm))->first()) {
                    $dataQuery = $usersModel->where('email', '=', $emailForm)->first();
                    $emailUser = $dataQuery["email"];
                    $nameUser = $dataQuery["first_name"];

                    $_SESSION["email_user"] = $emailUser;
                    $_SESSION["name_user"] = $nameUser;
                    
                    header("Location: home");
                } else {
                    header("Location: /");
                    return;
                }
            } else {
                header("Location: /");
                return;
            }            
        } else {
            header("Location: /");
            return;
        }
    }
    


    private function getUser() {
        $usersModel = new UsersModel();
        return $usersModel->where('email', 'mivillegasuarez@gmail.com')->first();
    }
}
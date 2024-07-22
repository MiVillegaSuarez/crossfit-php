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
        


        if(!empty($_COOKIE["email_user_login"])) {
            $cookieValue = $_COOKIE["email_user_login"];
            
            $usersModel = new UsersModel();
            $dataQuery = $usersModel->where('email', '=', $cookieValue)->first();
            $emailUser = $dataQuery["email"];
            
            if(!empty($emailUser)) {
                $this->loguear($dataQuery);
            } else {
                unset($_SESSION["email_user"]);
                unset($_SESSION["name_user"]);
                unset($_COOKIE["email_user_login"]);
                session_destroy();
                setcookie('email_user_login', null, -1); 
                
                header("Location: /");
            }
        } else {
            return $this->view('login', [
                'title' => 'Login | El Camino Hacia Una Mejor Salud'
            ]);
        }
    }

    public function loginValidation() {        
        return $this->view('login-validation');
    }

    public function authenticateUser($data) {
        $emailForm = $data["email"];
        $passForm = md5($data["password"]);

        if(isset($emailForm) && isset($passForm)) {
            $usersModel = new UsersModel();
            if($usersModel->where('email', '=', $emailForm)->first()) {
                if($usersModel->where('password', '=', $passForm)->first()) {
                    $dataQuery = $usersModel->where('email', '=', $emailForm)->first();
                    
                    $this->loguear($dataQuery);
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
    
    protected function loguear($data) {
        $emailUser = $data["email"];
        $nameUser = $data["first_name"];

        $_SESSION["email_user"] = $emailUser;
        $_SESSION["name_user"] = $nameUser;
        
        $expiration = time()+60*60*24*30;
        setcookie("email_user_login", $emailUser, $expiration);
        
        header("Location: /home");
    }
}
<?php
namespace Controllers;

session_start();
use Models\UsersModel;

class HomeController extends Controller {

    public function home() {
        
        if(empty($_SESSION["email_user"])) {
            header(
                "Location: /"
            );
            return;
        }
        
        return $this->view('home', [
            'title' => 'CrossFit | El Camino Hacia Una Mejor Salud'
        ]);
    }

    public function logoutUser() {
        unset($_SESSION["email_user"]);
        unset($_SESSION["name_user"]);
        unset($_COOKIE["email_user_login"]);
        session_destroy();
        setcookie('email_user_login', null, -1); 
        
        header("Location: /");
    }
}
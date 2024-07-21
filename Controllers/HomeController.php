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
}
<?php

namespace Controllers;

class HomeController extends Controller {

    public function home() {
        // include __DIR__."/../views/homeView.php";
        return $this->view('home');
    }
}
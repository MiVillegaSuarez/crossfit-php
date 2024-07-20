<?php

namespace Controllers;

class Controller {

    public function view($route) {
        if(file_exists("views/{$route}View.php")) {
            ob_start();
            include "views/{$route}View.php";
            $content = ob_get_clean();

            return $content;
        } else {
            return 'no existe';
        }
    }
}
<?php
namespace Controllers;

class Controller {

    public function view($route, $data = []) {
        // Destructurar el array
        extract($data);
        // return $title;
        
        if(file_exists("views/{$route}View.php")) {
            ob_start();
            include "views/{$route}View.php";
            $content = ob_get_clean();

            return $content;
        } else if(file_exists("views/{$route}.php")) {
            ob_start();
            include "views/{$route}.php";
            $content = ob_get_clean();

            return $content;
        } else {
            return 'no existe';
        }
    }
}
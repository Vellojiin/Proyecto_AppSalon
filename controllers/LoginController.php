<?php

namespace Controllers;

use MVC\Router;

class LoginController
{
    public static function login(Router $router) 
    {
       $router->render('auth/login'); // Cargamos nuestra vista de View del archivo Auth
    }

    public static function logout()
    {
        echo 'Desde Logout';
    }

    public static function olvide(Router $router)
    {
        $router->render('auth/olvide-password', [
            
        ]);
    }

    public static function recuperar()
    {
        echo 'Desde Olvide';
    }

    public static function crear(Router $router)
    {
        $router->render('auth/crear-cuenta', [
            
        ]);
    }
}
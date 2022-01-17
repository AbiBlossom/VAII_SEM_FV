<?php

namespace App;

use App\Models\Login;


class Auth
{
    public static function login($login, $password)
    {
        $logins = Login::getAll();
        foreach ($logins as $l) {
            if ($login == $l->getEmail()) {
                if ($password == $l->getPassword()) {
                    $_SESSION["name"] = $login;
                    return true;
                } else {
                    return false;
                }
            }
        }

        return false;
    }

    public static function isLogged(){
        return isset($_SESSION['name']);
    }

    public static function getName(){
        return (Auth::isLogged() ? $_SESSION['name'] : "");
    }

    public static function getRealName()
    {
        $logins = Login::getAll();
        foreach ($logins as $l) {
            if ($_SESSION["name"] == $l->getEmail()) {
                return $l->getName();
            }
        }
    }

    public static function logout()
    {
        unset($_SESSION['name']);
        session_destroy();
    }
}
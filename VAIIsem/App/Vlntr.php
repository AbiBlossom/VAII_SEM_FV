<?php

namespace App;
use App\Models\Volunteer;
class Vlntr
{
    public static function login($login, $password)
    {
        $vlntrs = Volunteer::getAll();
        foreach ($vlntrs as $v) {
            if ($login == $v->getEmail()) {
                if ($password == $v->getPassword()) {
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
        return (Vlntr::isLogged() ? $_SESSION['name'] : "");
    }

    public static function getRealName()
    {
        $logins = Volunteer::getAll();
        foreach ($logins as $l) {
            if ($_SESSION["name"] == $l->getEmail()) {
                return $l->getFirstName();
            }
        }
    }

    public static function logout()
    {
        unset($_SESSION['name']);
        session_destroy();
    }
}
<?php

namespace App\Controllers;

use App\Auth;
use App\Core\Responses\Response;
use App\Models\Dog;
use App\Models\Login;


class AuthController extends AControllerRedirect
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function allShelters()
    {
        $shelters = Login::getAll();

        return $this->html(
            [
                'login' => $shelters
            ]);
    }

    public function loginForm() {
        return $this->html( [
                'error' => $this->request()->getValue('error'),
                'note' => $this->request()->getValue('note')
            ]
        );
    }

    public function registerForm() {
        return $this->html( [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function login(){
        $login = $this->request()->getValue('login');
        $password = $this->request()->getValue('password');

        $logged = Auth::login($login,$password);

        if($logged) {
            $this->redirect('home');
        } else {
            $this->redirect('auth','loginForm', ['error' => 'Zlé meno alebo heslo!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        $this->redirect('home');
    }

    public function register()
    {
        $email = $this->request()->getValue('email');
        $login = Login::getAll();
        foreach ($login as $l){
            if($email == $l->getEmail()) {
                $this->redirect('auth', 'registerForm', ['error' => 'Email už je v systéme!']);
            }
        }

        $newLogin = new Login();
        $newLogin->setName($this->request()->getValue('name'));
        $newLogin->setEmail($this->request()->getValue('email'));
        $newLogin->setPassword($this->request()->getValue('password'));
        $newLogin->save();
        $this->redirect('auth','loginForm',['note' => 'Teraz sa môžete prihlásiť.']);


    }

    public function editProfile()
    {
        $logins = Login::getAll();

        return $this->html(
            [
                'login' => $logins,
                'error' => $this->request()->getValue('error'),
                'note' => $this->request()->getValue('note')
            ]);
    }

    public function changePassword()
    {

        if(!Auth::isLogged()) {
            $this->redirect('home');
        }
        $login = Login::getAll();
        foreach ($login as $l){
            if($_SESSION["name"] == $l->getEmail()) {
                if ($l->getPassword() == $this->request()->getValue('oldpassword'))
                {
                    $l->setPassword($this->request()->getValue('newpassword'));
                    $l->save();
                } else {
                    $this->redirect('auth','editProfile', ['error' => 'Zlé heslo!']);
                }
            }
        }
        $this->redirect('auth','editProfile', ['note' => 'Heslo bolo zmenené.']);

    }

    public function deleteProfile()
    {

        if(!Auth::isLogged()) {
            $this->redirect('home');
        }
        $login = Login::getAll();
        foreach ($login as $l){
            if($_SESSION["name"] == $l->getEmail()) {
                if ($l->getPassword() == $this->request()->getValue('password'))
                {
                    $offers = Dog::getAll();
                    foreach ($offers as $o){
                        if ($o->getShelterId() == $_SESSION["name"])
                        {
                            $o->delete();
                        }
                    }
                    $l->delete();
                    Auth::logout();

                } else {
                    $this->redirect('home','editProfile', ['error' => 'Zlé heslo!']);
                }
            }
        }
        $this->redirect('home');
    }



}
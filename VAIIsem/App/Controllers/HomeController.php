<?php

namespace App\Controllers;

use App\Auth;
use App\Core\AControllerBase;

use App\Models\Dog;
use App\Models\Login;


/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {
        return $this->html(
            []);
    }

    public function allDogs()
    {
        $dogs = Dog::getAll();

        return $this->html(
            [
                'dogs' => $dogs
            ]);
    }

    public function mydogs()
    {
        $dogs = Dog::getAll();

        return $this->html(
            [
                'dogs' => $dogs
            ]);
    }


    public function about()
    {
        return $this->html(
            []
        );
    }

    public function dogForm()
    {
        return $this->html(
            []
        );
    }

    public function singleDog(){
        $dogs = Dog::getAll();

        $parid = $this->request()->getValue('parid');
        return $this->html(
            [
                'dogs' => $dogs,
                'parid' => $this->request()->getValue('parid')
            ]);
    }

    public function editForm()
    {
        $dogs = Dog::getAll();

        $parid = $this->request()->getValue('postid');
        return $this->html(
            [
                'dogs' => $dogs,
                'postid' => $this->request()->getValue('postid')
            ]);
    }

    public function editDog()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }

        $dogs = Dog::getAll();
        foreach ($dogs as $dog) {
            if($dog->getId() == $this->request()->getValue('parid')){
                $dog->setName($this->request()->getValue('name'));
                $dog->setText($this->request()->getValue('text'));
                $dog->setHeight($this->request()->getValue('height'));
                $dog->setWeight($this->request()->getValue('weight'));
                $dog->setAge($this->request()->getValue('age'));
                $dog->setImage($this->request()->getValue('image'));
                $dog->setGender($this->request()->getValue('gender'));
                $dog->setBreed($this->request()->getValue('breed'));
                $dog->save();

            }
        }

        $this->redirect('home','mydogs');

    }

    public function shareDog()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }

        $newDog = new Dog();
        $newDog->setName($this->request()->getValue('name'));
        $newDog->setText($this->request()->getValue('text'));
        $newDog->setBreed($this->request()->getValue('breed'));
        $newDog->setGender($this->request()->getValue('gender'));
        $newDog->setHeight($this->request()->getValue('height'));
        $newDog->setWeight($this->request()->getValue('weight'));
        $newDog->setAge($this->request()->getValue('age'));

        if (isset($_FILES['file'])) {
            if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
                $name = date('Y-m-d-H-i-s_') . $_FILES['file']['name'];    move_uploaded_file($_FILES['file']['tmp_name'], Configuration::UPLOAD_DIR . "$name");
            }
        }
        $newDog->setImage($name);

        $newDog->setImage($this->request()->getValue('image'));

        $login = Login::getAll();
        foreach($login as $l){
            if($l->getEmail() == $_SESSION["name"]){
                $shelterID = $l->getId();
            }
        }
        $newDog->setShelterId($shelterID);
        $newDog->save();
        $this->redirect('home');

    }

    public function deleteDog()
    {
        if(!Auth::isLogged()){
            $this->redirect('home');
        }
        $parid = $this->request()->getValue('postid');
        $dogs = Dog::getAll();
        foreach ($dogs as $d)
        {
            if($parid == $d->getId())
            {
                $d->delete();
            }
        }
        $this->redirect('home','mydogs');
    }
}
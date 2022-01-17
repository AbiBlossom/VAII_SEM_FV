<?php

namespace App\Controllers;
use App\Vlntr;
use App\Core\Responses\Response;
use App\Models\Volunteer;
use App\Models\Comment;
class VlntrController extends AControllerRedirect
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function vlntrMain()
    {
        return $this->html(
            []);
    }


    public function vlntrRegisterForm() {
        return $this->html( [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function register()
    {
        $email = $this->request()->getValue('email');
        $login = Volunteer::getAll();
        foreach ($login as $l){
            if($email == $l->getEmail()) {
                $this->redirect('vlntr', 'vlntrRegisterForm', ['error' => 'Email už je v systéme!']);
            }
        }

        $newLogin = new Volunteer();
        $newLogin->setFirstName($this->request()->getValue('firstName'));
        $newLogin->setLastName($this->request()->getValue('lastName'));
        $newLogin->setEmail($this->request()->getValue('email'));
        $newLogin->setLocation($this->request()->getValue('location'));
        $newLogin->setPassword($this->request()->getValue('password'));
        $newLogin->setNickname($this->request()->getValue('nickname'));
        $newLogin->setFosterCare($this->request()->getValue('fosterCare'));

        $newLogin->save();
        $this->redirect('vlntr','vlntrMain');


    }
    public function deleteVolunteer()
    {
        $vlntrs = Volunteer::getAll();
        foreach ($vlntrs as $v) {
            if ($v->getPassword() == $this->request()->getValue('password')) {
                if($v->getEmail() == $this->request()->getValue('email')){

                    $v->delete();
                }

            }
        }
        $this->redirect('vlntr', 'vlntrMain');
    }
    public function deleteComment()
    {
        $comments = Comment::getAll();
        foreach ($comments as $c) {
            if ($c->getId() == $this->request()->getValue('id')) {


                    $c->delete();


            }
        }
        $this->redirect('vlntr', 'vlntrMain');
    }

    public function addComment()
    {

        $newComment = new Comment();
        $newComment->setEmail($this->request()->getValue('email'));
        $newComment->setText($this->request()->getValue('text'));

        $newComment->save();



    }

    public function getComments(){
        $comments = Comment::getAll();
        return $this->json($comments);

    }





}
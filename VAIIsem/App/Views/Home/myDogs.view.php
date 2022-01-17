<?php /** @var Array $data */
use App\Models\Dog;
use App\Models\Login;
?>
<div class="container">

    <div class="row">
        <div class="d-flex justify-content-start flex-wrap">
            <?php foreach ($data['dogs'] as $dog) {

                $login = Login::getAll();
                foreach($login as $l){
                    if($l->getEmail() == $_SESSION["name"]){
                        $shelterID = $l->getId();
                    }
                }

            if ($dog->getShelterId() == $shelterID) { ?>
                <div class="card" style="width: 18rem; margin: 5px">
                    <img src="<?= \App\Config\Configuration::UPLOAD_DIR . $dog->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <?=$dog->getName() ?>
                        </div>
                        <div>
                            <?=$dog->getText() ?>
                        </div>
                        <form method="post" action="?c=home&a=deleteDog">
                            <input type="hidden" name="postid" value="<?= $dog->getId() ?>">
                            <button class="btn btn-primary  text-uppercase fw-bold" type="submit" style="background-color: darkgreen; display: inline-block;"
                                    onclick="return confirm('Naozaj chcete odstrániť tohto psa?');">
                                Zmazať
                            </button>
                        </form>

                        <form method="post" action="?c=home&a=editForm">
                            <input type="hidden" name="postid" value="<?= $dog->getId() ?>">
                            <button class="btn btn-primary text-uppercase fw-bold" type="submit" style="background-color: darkgreen; display: inline-block;">
                                Upraviť
                            </button>
                        </form>
                    </div>
                </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
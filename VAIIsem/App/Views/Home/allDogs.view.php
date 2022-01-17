<?php /** @var Array $data */

use App\Models\Dog; ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start flex-wrap">
            <?php foreach (Dog::getAll() as $dog) { ?>
                <div class="card" style="width: 18rem; margin: 5px">
                    <img src="<?= \App\Config\Configuration::UPLOAD_DIR . $dog->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <?=$dog->getName() ?>
                        </div>
                        <div>
                            <?=$dog->getText() ?>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
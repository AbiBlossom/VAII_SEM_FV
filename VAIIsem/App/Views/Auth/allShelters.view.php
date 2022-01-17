<?php /** @var Array $data */

use App\Models\Login; ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start flex-wrap">
            <?php foreach (Login::getAll() as $shelter) { ?>
                <div class="card" style="width: 18rem; margin: 5px">
                    <img src="<?= \App\Config\Configuration::UPLOAD_DIR . $shelter->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <?=$shelter->getName() ?>
                        </div>
                        <div>
                            <?=$shelter->getText() ?>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
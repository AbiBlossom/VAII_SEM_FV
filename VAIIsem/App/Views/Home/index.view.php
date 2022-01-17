<?php /** @var Array $data */
use App\Models\Dog; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class = "h1"> eÚtulok </div>
            <p>
                Spájame útulky Slovenska, pre lepšiu prehľadnosť a väčšiu šancu adopcie. Psíkov v útulkoch neustále pribúda, a preto sa snažíme robiť osvetu adopciám a odvrátiť ľudí od kupovania psíkov od množiteľov.
                </p>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F28%2F2020%2F10%2F13%2Fcorgi-dog-POPDOGNAME1020.jpg" class="img-fluid" alt="...">
                    <br>
                    <br>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <img src="https://i.imgur.com/CTKqSqC.png" class="head2" alt="...">
                    <div class="h4"> Útulky </div>
                    <hr class="solid">
                    <p style="text-align:justify;">
                        Zaregistrujte svoj útulok a ponúkanie psíkov na adopciu bude jednoduchšie. Taktiež sa dostanete k zoznamu dobrovoľníkov, ktorých budete môcť požiadať o výpomoc či už s venčením alebo upratovaním.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <img src="https://i.imgur.com/CTKqSqC.png" class="head2" alt="...">
                    <div class="h4"> Dobrovoľníci </div>
                    <hr class="solid">
                    <p style="text-align:justify;">
                        Pridajte sa k dobrovoľníkom, ktorí pomáhajú robiť svet lepším. Následne vás bude schopný osloviť útulok, ktorý bude potrebivať vašu pomoc.
                        </p>
                </div>
                <br>
                <br>
                <h4 style="text-align: left; font-size: larger">Najnovší psíkovia hľadajúci domov</h4>
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
                            <form method="post" action="?c=home&a=singleDog">
                                <input type="hidden" name="parid" value="<?=$dog->getId()?>">
                                <button class="btn btn-primary" style="background: none; color:#64496d; border-color: white" type="submit">
                                    VIAC
                                </button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
                </div>


            </div>
        </div>
    </div>
</div>

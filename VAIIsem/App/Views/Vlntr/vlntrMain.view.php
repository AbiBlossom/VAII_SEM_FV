<?php /** @var Array $data */
use App\Models\Volunteer;
use App\Models\Comment;?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Dobrovoľníctvo </h1>
            <p>
                Jedna z vecí, ktorá veľmi pomáha existencii útulkov je dobrovoľníctvo. Ak sa stanete dobrovoľníkom, máte možnosť pomáhať v útulku s venčením, čistením kotercov, kŕmením alebo upratovaním. Taktiež si môžte zobrať psíka do dočasnej opatery, kedy útulok hradí všetky finančné náklady na psíka. V tomto prípade máte psíka u seba doma, staráte sa oňno a podľa potreby s ním chodíte na veterinu, až kým si psík nenájde trvalý domov.
            </p>
        </div>
        <?php if (!\App\Auth::isLogged()) { ?>
        <form method="post" action="?c=vlntr&a=vlntrRegisterForm" >

            <button class="btn btn-primary text-uppercase fw-bold" style="background-color:darkgreen; display:unset; margin-top: 10px; margin-bottom: 10px" type="submit">
                Stať sa DOBROVOĽNÍKOM
            </button>
            <br>
        </form>
        <?php } ?>

        <form method="post" action="?c=vlntr&a=deleteVolunteer">
            <div class="form-group">
                <label><b>Zadajte email</b></label>
                <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" required>

            </div>
            <div class="form-group">
                <label><b>Zadajte heslo pre vymazanie zo zoznamu dobrovoľníkov</b></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Heslo" required>

            </div>

            <button class="btn btn-primary text-uppercase fw-bold" style="background-color:red; margin-top: 10px;display: unset" type="submit"
                    onclick="return confirm('Cgcete naozaj zmazať svoj účet?');">
                Zmazať
            </button>
        </form>


        <div class="col-6">

                <br>
                <br>
                <h4 style="text-align: left; font-size: larger">Dobrovoľníci</h4>
                <div class="d-flex justify-content-start flex-wrap">
                    <?php foreach (Volunteer::getAll() as $vlntr) { ?>
                        <div class="card" style="width: 12rem; margin: 6px">
                            <img src="https://icon-library.com/images/anonymous-avatar-icon/anonymous-avatar-icon-25.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="font-size: 10px; padding: 5px">
                                <?php if (\App\Auth::isLogged()) { ?>
                                    <div>
                                        <?=$vlntr->getFirstName() ?>
                                    </div>
                                    <div>
                                        <?=$vlntr->getLastName() ?>
                                    </div>

                                    <div>
                                        Dočaska: <?=$vlntr->getFosterCare() ?>
                                    </div>
                                    <div>
                                        <?=$vlntr->getEmail() ?>
                                    </div>
                                <?php } ?>

                                <div>
                                    <?=$vlntr->getNickname() ?>
                                </div>
                                <div>
                                    <?=$vlntr->getLocation() ?>
                                </div>



                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <div class="col-6">


            <div class="form-group">
                <label><b>Zadajte email</b></label>
                <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" required>

            </div>
            <div class="form-group">
                <label><b>Napíšte komentár</b></label>
                <input class="form-control" id="text" name="text" type="text" placeholder="Komentar" required>

            </div>

            <div class="form-group">
                <button id="submit" class="btn btn-primary btn-block"> Pridať</button>
            </div>
            <?php if (\App\Auth::isLogged()) { ?>




            <form method="post" action="?c=vlntr&a=deleteComment">
                <div class="form-group">
                    <label><b>Zadajte ČÍSLO komentára</b></label>
                    <input class="form-control" id="id" name="id" type="number" placeholder="Číslo" required>

                </div>

                <button class="btn btn-primary text-uppercase fw-bold" style="background-color:red; margin-top: 10px;display: unset" type="submit"
                        onclick="return confirm('Chcete naozaj zmazať tento komentár?');">
                    Zmazať
                </button>
            </form>
            <?php } ?>
            <div class="col-6" id="komentare">

                <br>
                <br>
                <h4 style="text-align: left; font-size: larger">Komentáre</h4>
                <div>
                    <?php foreach (Comment::getAll() as $c) { ?>
                        <br>
                        <br>
                                    <div>
                                        Číslo komentára: <?=$c->getId() ?>
                                    </div>
                                     <div>
                                        <b><?=$c->getEmail() ?></b>
                                    </div>
                                    <div>
                                        <b><?=$c->getText() ?></b>
                                    </div>

                    <?php } ?>

            </div>
        </div>



        </div>
    </div>
</div>
</div>


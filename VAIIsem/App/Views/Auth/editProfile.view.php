<?php /** @var Array $data */ ?>

<div class="main">

    <h4 style="text-align: left; font-size: larger">Môj účet:</h4>

    <?php if ($data['error'] != "") {?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Chyba!</strong> Nesprávne heslo.
        </div>
    <?php } ?>
    <?php if ($data['note'] != "") {?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Heslo bolo úspešne zmenené!</strong>
        </div>
    <?php } ?>
    <?php foreach ($data['login'] as $user) {
        if ($user->getEmail() == $_SESSION["name"]) { ?>
            <p><strong>Názov: </strong> <?= $user->getName() ?></p>
            <p><strong>E-mail: </strong> <?= $user->getEmail() ?></p>

            <br>

            <form method="post" action="?c=auth&a=changeText" >

                <strong>Zmena popisu</strong>
                <div class="form-group">
                    <label>Nový popis </label>
                    <input class="form-control" name="newtext" id="newtext" type="text" placeholder="Nový text" required>
                </div>
                <button class="btn btn-primary text-uppercase fw-bold" style="background-color:darkgreen; display:unset; margin-top: 10px; margin-bottom: 10px" type="submit">
                    Potvrdiť
                </button>
                <br>
            </form>
            <br>

            <form method="post" action="?c=auth&a=changePassword" >

                <strong>Zmena hesla</strong>
                <div class="form-group">
                    <label>Nové heslo </label>
                    <input class="form-control" name="newpassword" id="newpassword" type="password" placeholder="Nové heslo" required>
                </div>
                <div class="form-group">
                    <label>Staré heslo</label>
                    <input class="form-control" id="oldpassword" name="oldpassword" type="password" placeholder="Heslo" required>

                </div>

                <button class="btn btn-primary text-uppercase fw-bold" style="background-color:darkgreen; display:unset; margin-top: 10px; margin-bottom: 10px" type="submit">
                    Potvrdiť
                </button>
                <br>
            </form>
            <br>
            <form method="post" action="?c=auth&a=deleteProfile">


                <p><strong style="margin-top: 10px">Zmazanie účtu</strong></p>

                <div class="form-group">
                    <label>Zadajte heslo</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Heslo" required>

                </div>

                <button class="btn btn-primary text-uppercase fw-bold" style="background-color:red; margin-top: 10px;display: unset" type="submit"
                        onclick="return confirm('Cgcete naozaj zmazať svoj účet?');">
                    Potvrdiť
                </button>

            </form>


        <?php }} ?>
    <br>



</div>
<script src="/public/js/editProfile.js"></script>
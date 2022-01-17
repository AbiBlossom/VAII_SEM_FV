<?php /** @var Array $data */ ?>
<script src="/VAIIsem/public/js/registerForm.js"></script>

<div class="row justify-content-center" >
    <div class="col-md-6">
        <div class="card">
            <h2 style="text-align: center">Registračný formulár</h2>
            <article class="card-body">
                <form method="post" action="?c=auth&a=register">
                    <?php if ($data['error'] != "") {?>
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Chyba!</strong> Používateľ s týmto e-mailom už existuje!
                        </div>
                    <?php } ?>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Meno </label>
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="" required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Priezvisko </label>
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Emailová adresa</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                        <small class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label>Heslo</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder=" " required>
                    </div>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Lokalita</label>
                            <input type="text" id="location" name="location" class="form-control" placeholder="" required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Prezývka</label>
                            <input type="text" id="nickname" name="nickname" class="form-control" placeholder="" required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Dočaska (Áno/Nie)</label>
                            <input type="text" id="fosterCare" name="fosterCare" class="form-control" placeholder="" required >
                        </div>
                    </div>
                    <br>
                    <div id="submit-info">
                        Zadajte všetky údaje v správnom tvare!
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit" class="btn btn-primary btn-block"> Registrovať</button>
                    </div>
                    <small class="text-muted">Registráciou vyjadrujete súhlas s podmienkami používania.</small>
                </form>
            </article>
            <div class="border-top card-body text-center">Už máte účet? <a href="?c=auth&a=loginForm">Prihláste sa.</a></div>
        </div>
    </div>

</div>


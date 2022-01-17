<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eUtulok</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="/VAIIsem/public/css.css">


</head>
<body>



<!-- Side navigation -->
<div class="sidenav">
    <img
            class="img-fluid"
            src="https://i.imgur.com/fIsrYzU.png" alt="">
    <br>
    <br>
    <?php if (\App\Auth::isLogged()) { ?>
        <a style="text-align: right; color: white">Vitaj <?php echo \App\Auth::getRealName() ?></a>
    <?php } ?>
    <a href="?c=home&a=index"">Domov</a>
    <a href="?c=vlntr&a=vlntrMain">Dobrovoľníctvo</a>
    <a href="#">Kontakty</a>
</div>

<!-- Page content -->

<div class="hlavna">

    <img
            class="cropped1"
            src="https://i.imgur.com/2bcgXra.png" alt="">



    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">eÚtulok</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link"  href="?c=home&a=allDogs">Psi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=auth&a=allShelters">Útulky</a>
                    </li>
                    <?php if (!\App\Auth::isLogged()) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=auth&a=registerForm" style="border-right: 1px solid #333333">Registrovať sa</a>
                    </li>
                        <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásiť</a>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home&a=dogForm" style="border-right: 1px solid #333333">Pridať psa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home&a=myDogs">Naši psi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=auth&a=editProfile">Nastavenie účtu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=auth&a=logout">Odhlásiť</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main">
        <?= $contentHTML ?>
    </div>

    <div class="footer col-12">

        <img
                class="img-fluid"
                src="https://i.imgur.com/fIsrYzU.png" alt="">
        <p style="text-align:center;">
            <a href="?c=home">Domov</a>
            <br>
            <a href="#">Dobrovoľníctvo</a>
            <br>
            <a href="#">Kontakty</a>
        </p>
    </div>



</div>




</body>
</html>


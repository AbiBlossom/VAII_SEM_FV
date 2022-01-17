<script src="/public/js/dogForm.js"></script>

<?php /** @var Array $data */ ?>

<div class="row justify-content-center" >
    <div class="col-md-8">
        <h4 style="text-align: center; font-size: larger">Pridaj psa</h4>
        <form method="post" enctype="multipart/form-data" action="?c=home&a=shareDog">
            <div class="form-group">

                <label for="name">Meno:</label>
                <input type = "text" name="name" class="form-control" id="name" required>
                <small id="nameHelp" class="form-text text-muted">Zadajte meno psa</small>
            </div>
            <br>

            <div class="form-group">
                <label for="text">Informácie:</label>
                <input type = "text" name="text" class="form-control" value="" id="text" required>
                <small id="textHelp" class="form-text text-muted">Zadajte základné informácie k psíkovi.</small>

            </div>
            <br>

            <div class="form-group">
                <label for="breed">Rasa:</label>
                <input type = "text" name="breed"  class="form-control" id="breed" required>
                <small id="breedHelp" class="form-text text-muted">Zadajte rasu psa.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="gender">Pohlavie:</label>
                <input type = "text" name="gender"  class="form-control"  id="gender" required>
                <small id="genderHelp" class="form-text text-muted">Zadajte pohlavie psa.</small>
            </div>
            <br>

            <div class="form-group">
                <label for="height">Výška:</label>
                <input type = "number" name="height"  class="form-control" id="height" required>
                <small id="heightHelp" class="form-text text-muted">Zadajte výšku psa v kohútiku.</small>
            </div>
            <br>

            <div class="form-group">
                <label for="weight">Váha:</label>
                <input type = "number" name="weight"  class="form-control" id="weight" required>
                <small id="weightHelp" class="form-text text-muted">Zadajte váhu psa.</small>
            </div>
            <br>

            <div class="form-group">
                <label for="age">Vek:</label>
                <input type = "number" name="age"  class="form-control" id="age" required>
                <small id="ageHelp" class="form-text text-muted">Zadajte vek psa.</small>
            </div>
            <br>

            <div class="mb-3">
                <label for="formFile" class="form-label">Orázok:</label>
                <input name = "file"  accept="image/*"  class="form-control"  id="formFile" type="file" >

            </div>
            <br>
            <div id="submit-info">
                Zadajte všetky údaje v správnom tvare!
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" id="submit" type="submit">Pridajte psa
                </button>
            </div>
        </form>
    </div></div>
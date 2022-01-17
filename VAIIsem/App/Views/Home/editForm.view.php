<?php /** @var Array $data */
use App\Models\Dog;
?>

<?php foreach($data['dogs'] as $post) {
    if ($post->getId() == $data['postid']) {
        $dog = $post;
    }}?>

<script src="/VAIIsem/public/js/dogForm.js"></script>


<div class="row justify-content-center" >
    <div class="col-md-8">

        <h4 style="text-align: center; font-size: larger">Upravuješ informácie o psíkovy:  "<?= $dog->getText()?>"</h4>

        <form method="post" action="?c=home&a=editDog">
            <div class="form-group">
                <input type="hidden" name="parid" value="<?=$dog->getId()?>">

                <label for="name">Meno:</label>
                <input type = "text" name="name" class="form-control"  id="name" value="<?= $dog->getName()?>" required>
                </div>
            <br>

            <div class="form-group">
                <label for="text">Popis</label>
                <input type = "text" name="text" class="form-control" id="text" value="<?= $dog->getText()?>" required>
                 </div>
            <br>
            <div class="form-group">
                <label for="weight">Váha:</label>
                <input type = "number" name="weight" class="form-control"  id="weight" value="<?= $dog->getWeight()?>" required>

            </div>
            <br>

            <div class="form-group">
                <label for="height">Výška:</label>
                <input type = "number" name="height"  class="form-control"  id="height" value="<?= $dog->getHeight()?>" required>
                </div>
            <br>
            <div class="form-group">
                <label for="age">Vek:</label>
                <input type = "number" name="age"  class="form-control" id="age" value="<?= $dog->getAge()?>" required>
                </div>

            <br>
            <div class="form-group">
                <label for="gender">Pohlavie:</label>
                <input type = "text" name="gender"  class="form-control" id="gender" value="<?= $dog->getGender()?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="breed">Rasa:</label>
                <input type = "text" name="breed"  class="form-control" id="breed" value="<?= $dog->getBreed()?>" required>
            </div>
            <br>

            <br>
            <br>
            <div class="form-group">
                <label for="image">Obrazok:</label>
                <input type = "text" name="image"  class="form-control" id="image" value="<?= $dog->getImage()?>" required>
            </div>
            <br>

            <br>
            <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Upraviť
                </button>
            </div>
        </form>

    </div></div>


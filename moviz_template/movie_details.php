<?php 
require_once "templates/header.php";
require_once "libs/movie.php";

$error = false;
if (isset($_GET["index"])) {
    $index = (int)$_GET["index"];
    $movie = getMovieByIndex($index);
} else {
    $error = true;
}
?>


<div class="container col-xxl-8 px-4 py-5">
    <?php if (!$error) { ?>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?=htmlspecialchars($movie["image"])?>" class="d-block mx-lg-auto img-fluid" alt="<?=htmlspecialchars($movie["title"])?>" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=htmlspecialchars($movie["title"])?></h1>
                <p class="lead"><?=htmlspecialchars($movie["summary"])?></p>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            Ce film n'existe pas
        </div>
    <?php } ?>
</div>


<?php require_once "templates/footer.php" ?>

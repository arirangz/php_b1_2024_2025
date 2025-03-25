<?php 
require_once "libs/user.php";
require_once "templates/header.php"; 

?>
<?php 
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $isAllowed = loginUser($_POST["email"], $_POST["password"]);

        if ($isAllowed) {
            header("Location: profile.php");
        }
    } 
?>
<div class="container col-xxl-8 px-4 py-5">
    <form method="post">
        <?php if (isset($isAllowed)) { ?>
            <?php if ($isAllowed === true) { ?>
                <div class="alert alert-success">
                    Accès autorisé
                </div>
            <?php } else {?>
                <div class="alert alert-danger">
                    Email ou mot de passe incorrecte.
                </div>
            <?php } ?>
        <?php } ?>

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>

</div>
<?php require_once "templates/footer.php" ?>
<?php 

require_once "templates/header.php";
require_once "libs/user.php";
require_once "libs/pdo.php";

if (isset($_POST["nickname"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $result = addUser($pdo, $_POST["nickname"], $_POST["email"], $_POST["password"]);
    var_dump($result);
}

?>

<div class="container col-xxl-8 px-4 py-5">
    <form action="" method="post">
        <div class="mb-3">
            <label for="form-label">Nickname</label>
            <input class="form-control" type="text" name="nickname" id="nickname">
        </div>
        <div class="mb-3">
            <label for="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <input type="submit" value="Sign-up" class="btn btn-primary">

    </form>

</div>


<?php require_once "templates/footer.php" ?>
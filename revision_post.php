
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="OK">
    </form>
    <?php if (isset($_POST["email"]))  {?>
        <h2>Votre adresse email: <?=htmlspecialchars($_POST["email"] )?></h2>
    <?php } ?>
</body>
</html>
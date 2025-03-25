<?php 
require_once "libs/pdo.php";
require_once "libs/post.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    // On récupère le post et on le stocke dans une variable $post
    $post = getPostById($pdo, $id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($post) && $post): ?>
        <h1><?=htmlspecialchars($post["title"]); ?></h1>
        <p><?=htmlspecialchars($post["description"])?></p>
    <?php else: ?>
        <h1>Article introuvable</h1>
    <?php endif;?>
    <a href="index.php">Retour</a>
</body>
</html>
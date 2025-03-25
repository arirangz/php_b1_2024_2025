<?php 
require_once "libs/pdo.php";
require_once "libs/post.php";

$posts = getAllPosts($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <section>
        <h1>Liste des posts</h1>
        <?php foreach($posts as $post): ?>
            <article>
                <h2><?=htmlspecialchars($post["title"]) ?></h2>
                <a href="post_details.php?id=<?=$post["id"] ?>">Lire la suite</a>
            </article>
        <?php endforeach; ?>
    </section>

</body>
</html>
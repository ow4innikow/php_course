<?php
require('posts.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Blog</h1>
    <form action="form.php" method="post">
        <input type="text" name="email">
        <button type="submit">Send</button>
    </form>
    <br>
    <?php
    for($i = 0; $i < 3; $i++) :
    ?>
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title"><?= $posts[$i]['title'] ?></h5>
            <p class="card-text"><?= $posts[$i]['description']; ?></p>
            <a href="post.php?id=<?= $i ?>" class="btn btn-primary">Read more</a>
        </div>
    </div>
    <?php
    endfor
    ?>
   </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

TEST

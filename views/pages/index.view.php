<?php require 'views/components/header.php' ?>

    <h1>Index Page</h1>
    <?php foreach ($users as $user) : ?>
        <?= "<p> $user->name  </p>"; ?>
    <?php endforeach ?>
    <form action="post" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

<?php require 'views/components/footer.php' ?>


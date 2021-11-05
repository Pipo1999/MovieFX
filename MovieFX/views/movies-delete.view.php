<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Borrar película</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
</head>

<body>
<h1>Esborrar pel·lícula</h1>
<?php if (!isPost()) : ?>
    <p>Seguro que quieres borrar la película <?= $data["title"] ?>?
    <form action="movies-delete.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data["id"] ?>">

        <div>
            <input type="submit" name="response" value="Sí"/>
            <input type="submit" name="response" value="No"/>
        </div>
    </form>
<?php else: ?>
    <?php if (!empty($errors)): ?>
        <h2><?= array_shift($errors) ?></h2>
    <?php else: ?>
        <h2><?= $message ?></h2>
    <?php endif; ?>
<?php endif; ?>
<br>
<a href="index.php?"><input type="button" class="btnI" value="Inicio" /></a>
<br>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <title>MovieFX</title>
    <link rel="stylesheet" href="styles/movie-style.css" type="text/css">
</head>
<body>
    <header>
        <a href="index.php?"><h1>Películas</h1></a>
    </header>
    <div>
        <?php if (!empty($movie)): ?>
            <h2><?=$movie->getTitle()?></h2>
            <figure>
                <img style="width: 200px; height: 300px" alt="<?=$movie->getTitle() ?>" src="<?=Movie::POSTER_PATH?>/<?=$movie->getPoster() ?>" />
            </figure>
            <p><?=$movie->getOverview()?></p>
        <?php else: ?>
            <h3><?=array_shift($errors)?></h3>
        <?php endif; ?>
    </div>
    <a href="movies-delete.php?id=<?=$movie->getId() ?>"><input type="button" id="btnB" value="Borrar" /></a>
    <a href="movies-edit.php?id=<?=$movie->getId() ?>"><input type="button" id="btnE" value="Editar" /></a>
</body>

</html>



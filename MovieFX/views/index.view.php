<!doctype html>
<html lang="es">
<head>
    <title>MovieFX</title>
    <link rel="stylesheet" href="styles/index-style.css" type="text/css">
</head>
<body>
    <header>
        <a href="index.php?"><h1>Películas</h1></a>
    </header>
    <a href="movies-create.php"><input type="button" id="newP" value="Nueva película"></a>
    <?php foreach ($movies as $movie):?>
        <p><a id="films" href="movie.php?id=<?=$movie->getId()?>"><?=$movie->getTitle()?></a></p>
    <?php endforeach; ?>
</body>

</html>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MovieFX</title>
    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: slategrey;
        }

        h1 {
            margin-bottom: 0;
            font-size: 60px;
        }

        p, ul {
            font-size: 40px;
            font-weight: bold;
            margin-right: 15px;
        }

        p {
            color: lawngreen;
        }
    </style>
</head>
<body>
    <h1>Películas</h1>
    <ul>
    <?php foreach ($movies as $movie):?>
        <li>
            <a href='movie.php?id=<?=$movie->getId()?>'><p><?=$movie->getTitle()?></p></a>
        </li>
    <?php endforeach;?>
    </ul>

</body>
</html>


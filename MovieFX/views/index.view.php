<!doctype html>
<html lang="es">
<head>
    <title>MovieFX</title>
    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: slategrey;
        }

        h1 {
            font-size: 60px;
        }

        p {

            text-align: center;
        }

        li, a {
            font-size: 50px;
            font-weight: bold;
            color: gold;
            text-decoration: none;
        }

        .films {
            border-left: solid black 10px;
            border-bottom: solid black 5px;
            border-bottom-left-radius: 30px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 20px;
            margin-bottom: 20px;
        }

        img {
            border: inset dimgrey 10px;
            box-shadow: black 10px 10px 10px;
        }

        input  {
            font-size: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Películas</h1>
    <p><a href="movies-create.php"><input type="button" value="Nueva película"></a></p>
    <?php foreach ($movies as $movie):?>
        <a class="films" href="movie.php?id=<?=$movie->getId()?>"><?=$movie->getTitle()?></a>
    <?php endforeach; ?>
</body>

</html>



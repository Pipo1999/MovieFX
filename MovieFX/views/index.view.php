<!doctype html>
<html lang="es">
<head>
    <title>MovieFX</title>
    <style type="text/css">
        body {
            margin: 0;
            background-color: slategray;
        }

        #h {
            margin: 0;
            line-height: 60px;
            background-color: black;
            border-bottom: solid red 3px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;

        }

        h1 {
            margin: 0;
            margin-left: 10px;
            color: white;
        }

        p {
            margin-left: 20px;
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

        input  {
            font-size: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>
        <div id="h">
            <h1>Películas</h1>
        </div>
    <p><a href="movies-create.php"><input type="button" value="Nueva película"></a></p>
    <?php foreach ($movies as $movie):?>
        <p><a class="films" href="movie.php?id=<?=$movie->getId()?>"><?=$movie->getTitle()?></a></p>
    <?php endforeach; ?>
</body>

</html>



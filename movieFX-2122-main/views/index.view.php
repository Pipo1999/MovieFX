<!doctype html>
<html lang="en">
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

        h2 {
            font-size: 50px;
            color: aqua;
            text-decoration: underline rebeccapurple 6px wavy;
        }

        p {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin: 4%;
        }

        img {
            border: inset dimgrey 10px;
            box-shadow: black 10px 10px 10px;
        }
    </style>
</head>
<body>
    <h1>Pel·lícules</h1>
    <p><a href="movies-create.php">Nova pel·lícula</a></p>
    <ul>
    <?php foreach ($movies as $movie):?>
        <li><a href="movie.php?id=<?=$movie->getId()?>"><?=$movie->getTitle()?></a></li>
    <?php endforeach; ?>
    </ul>
</body>

</html>



<!doctype html>
<html lang="en">
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
            text-decoration: underline blueviolet;
        }

        h2 {
            font-size: 50px;
            color: black;
            margin-left: 80px;

        }

        p {
            font-size: 30px;
            font-weight: bold;
            margin: 4%;
        }

        img {
            float: left;
            margin-right: 30px;;
            border: inset dimgrey 10px;
            box-shadow: black 10px 10px 10px;

        }

        input {
            font-size: 40px;
            font-weight: bold;
        }

        #btnB {
            background-color: red;
        }

        #btnE {
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <div id="h">
        <a href="index.php?"><h1>Películas</h1></a>
    </div>
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



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

        .buttons input {
            font-size: 40px;
            font-weight: bold;
        }

        .btnB {
            background-color: red;
        }

        .btnE {
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <h1>Pel·lícules</h1>
    <?php if (!empty($movie)): ?>
        <h2><?=$movie->getTitle()?></h2>
        <figure>
            <img style="width: 200px; height: 300px" alt="<?=$movie->getTitle() ?>" src="<?=Movie::POSTER_PATH?>/<?=$movie->getPoster() ?>" />
        </figure>
        <p><?=$movie->getOverview()?></p>
    <?php else: ?>
        <h3><?=array_shift($errors)?></h3>
    <?php endif; ?>

    <div class="buttons">
        <a href="movies-delete.php?id=<?=$movie->getId() ?>"><input type="button" class="btnB" value="Borrar" /></a>
        <a href="movies-edit.php?id=<?=$movie->getId() ?>"><input type="button" class="btnE" value="Editar" /></a>
    </div>
</body>

</html>



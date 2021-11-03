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
    <h1>Películas</h1>
    <?php if (!empty($movie)): ?>
        <h2><?=$movie->getTitle()?></h2>
        <figure>
            <img style="width: 200px; height: 300px" alt="<?=$movie->getTitle() ?>" src="<?=Movie::POSTER_PATH?>/<?=$movie->getPoster() ?>" />
        </figure>
        <p><?=$movie->getOverview()?></p>
    <?php else: ?>
        <h3><?=array_shift($errors)?></h3>
    <?php endif; ?>
</body>

</html>


<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Nova pel·lícula</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
    <style type="text/css">
        body {
            margin: 0;
            background-color: slategrey;
        }

        #h {
            margin: 0;
            line-height: 60px;
            background-color: black;
            border-bottom: solid red 3px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        #h h1 {
            margin: 0;
            margin-left: 10px;
            font-size: 32px;
            color: white;
            text-decoration: underline blueviolet;
        }

        #main h1 {
            margin-left: 10px;
            text-align: center;
            text-decoration: underline blueviolet;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #main {
            margin-top: 30px;
            margin-left: 30%;
            margin-right: 30%;
            background-color: azure;
            border: inset grey 5px;
            box-shadow: 10px 10px 10px;
        }

        div {
            margin-bottom: 30px;
        }

        p {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        label {
            font-size: 20px;
        }

        a {
            font-size: 30px;
            font-weight: bold;
        }
    </style>

</head>

<body>
<div id="h">
    <a href="index.php?"><h1>Películas</h1></a>
</div>
    <div id="main">
        <h1>Nueva película</h1>
    <?php if (!isPost() || !empty($errors)) :?>
        <form action="" method="post" enctype="multipart/form-data">
            <pre>
            <?php
            if (!empty($errors))
                print_r($errors)
            ?>
            </pre>
            <table>
                <tr>
                    <td><label for="title">Título</label></td>
                    <td><input id="title" type="text" name="title" value="<?= $data["title"] ?>"></td>
                </tr>

                <tr>
                    <td><label for="release-date">Fecha de salida (YYYY-mm-dd)</label></td>
                    <td><input id="title" type="text" name="release_date" value="<?= $data["release_date"] ?>"></td>
                </tr>
            </table>

            <div>
                <p>Rating</p>
                <?php foreach ([1, 2, 3, 4, 5] as $ratingValue) : ?>
                    <label for="genre<?= $ratingValue ?>">
                        <input id="genre<?= $ratingValue ?>" type="radio" name="rating"
                            value="<?= $ratingValue ?>" <?= ($data["rating"] === $ratingValue) ? "checked":"" ?> >
                        <?= $ratingValue ?>
                    </label>
                <?php endforeach ?>
            </div>

            <div>
                <label for="overview">Descripción</label>
                    <textarea id="overview" name="overview"><?= $data["overview"] ?></textarea>
            </div>
            <div>
                <p>Poster</p>
                <input type="file" name="poster" />
            </div>
            <div>
                <input type="submit" value="Crear">
            </div>
        </form>
    </div>
    <?php endif; ?>
    <?php if (empty($errors) && isPost()) : ?>
        <h2><?=$message?></h2>
        <table>
            <tr>
                <th>Title</th>
                <td><?= $data["title"] ?></td>
            </tr>
            <tr>
                <th>Overview</th>
                <td><?= $data["overview"] ?></td>
            </tr>
            <tr>
                <th>Release date</th>
                <td><?= date("d/m/Y", strToTime($data["release_date"])) ?></td>
            </tr>
            <tr>
                <th>Rating</th>
                <td><?= $data["rating"] ?></td>
            </tr>
        </table>
    <?php endif ?>
</body>

</html>
<?php declare(strict_types=1);

// COOKIES
setcookie("last_visit", (string) time(), time() + 604800);
if (isset($_COOKIE["last_visit"])) {
    $cookie = $_COOKIE["last_visit"];
    $date = date("d/m/Y H:i", (int)$cookie);
    if (filter_var($cookie, FILTER_VALIDATE_INT)) {
        echo '<script language="javascript">';
        echo 'alert("Bienvenido, su última visita tuvo lugar el '. $date . '.")';
        echo  '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error: cookie inválida")';
        echo '</script>';
    }
}else {
    echo '<script language="javascript">';
    echo 'alert("Bienvenido nuevo usuario")';
    echo '</script>';
}

require "src/Movie.php";
// ara obtindrem les pel·lícules de la BD
// require "movies.inc.php";

$pdo = new PDO("mysql:host=127.0.0.1;dbname=movies;charset=utf8", "dbuser", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$moviesStmt = $pdo->prepare("SELECT * FROM movie");
$moviesStmt->setFetchMode(PDO::FETCH_ASSOC);
$moviesStmt->execute();

// fetchAll tornarà un array les dades de pel·lícules en un altre array
// caldrà mapejar les dades
$moviesAr = $moviesStmt->fetchAll();

foreach ($moviesAr as $movieAr) {
    $movie = new Movie();
    $movie->setId((int)$movieAr["id"]);
    $movie->setTitle($movieAr["title"]);
    $movie->setPoster($movieAr["poster"]);
    $movie->setReleaseDate($movieAr["release_date"]);
    $movie->setOverview($movieAr["overview"]);
    $movie->setRating((float)$movieAr["rating"]);
    $movies[] = $movie;
}

require "views/index.view.php";
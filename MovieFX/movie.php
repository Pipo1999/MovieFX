<?php
declare(strict_types=1);

require "src/Movie.php";

$id = 0;
$errors = [];
$movie = null;

$idTemp = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if (!empty($idTemp))
    $id = $idTemp;

$pdo = new PDO("mysql:host=127.0.0.1;dbname=movies;charset=utf8", "dbuser", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$moviesStmt = $pdo->prepare("SELECT * FROM movie WHERE id=:id");
$moviesStmt->bindValue("id", $id);
$moviesStmt->setFetchMode(PDO::FETCH_ASSOC);
$moviesStmt->execute();

$movieAr = $moviesStmt->fetch();

if (!empty($movieAr)) {
    $movie = new Movie();
    $movie->setId((int)$movieAr["id"]);
    $movie->setTitle($movieAr["title"]);
    $movie->setPoster($movieAr["poster"]);
    $movie->setReleaseDate($movieAr["release_date"]);
    $movie->setOverview($movieAr["overview"]);
    $movie->setRating((float)$movieAr["rating"]);
}
else
    $errors[] = "La pel·lícula sol·licitada no existeix";

/*
Tot aquest codi ja no és necessari
$filteredMovies = array_filter($movies, function ($movie) use ($id) {
    if ($movie->getId()===$id)
        return true;
    return false;
});

if (count($filteredMovies) === 1)
    $movie = array_shift($filteredMovies);
else
    $errors[] = "La pel·lícula sol·licitada no existeix";
*/
require "views/movie.view.php";
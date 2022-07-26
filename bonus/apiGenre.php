<?php
include_once __DIR__ . '/database.php';
header('Content-Type: application/json');

$genre = $_GET['genre'];
if ($genre === 'All') {
    $genreArray = $database;
} else {
    $genreArray = [];
    foreach ($database as $album) {
        if ($album['genre'] === $genre) {
            $genreArray[] = $album;
        }
    }
}

echo json_encode([
    'results' => $genreArray,
]);

<?php
include_once __DIR__ . '/database.php';
header('Content-Type: application/json');

$author = $_GET['author'];
if ($author === 'All') {
    $authorArray = $database;
} else {
    $authorArray = [];
    foreach ($database as $album) {
        if ($album['author'] === $author) {
            $authorArray[] = $album;
        }
    }
}

echo json_encode([
    'results' => $authorArray,
]);

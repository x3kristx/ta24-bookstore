<?php

require_once('./connection.php');

if ( !isset($_GET['id']) || !$_GET['id'] ) {
    echo 'Viga: raamatut ei leitud!';
    exit();
}

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

$stmt = pdo->prepare('SELECT first_name, last_name FROM book_authors ba  LEFT JOIN authors a ON ba.authors = :id');
$stmt->execute(['book_id' => $id]);
$authors = $stmt->fetchAll();

// var_dump($authors);

var_dump($book);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $book['title'];?></title>
</head>
<body>
    <h1><?= $book ['title'] ?> </h1>

    Autorid:
    <ul>
        <?php foreach ( $$variables as $key ) { ?>
            # code ... 
        <?php } ?>
    </ul>
    <h1>Pealkiri</h1>
</body>
</html>
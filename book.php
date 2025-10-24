<?php

require_once('./connection.php');

if ( !isset($_GET['id']) || !$_geT['id'] ) {
    echo 'Viga: raamatut ei leitud!';
    exit;
}

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();
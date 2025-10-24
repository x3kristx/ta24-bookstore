<?php

require_once('./connection.php');

$stmt = $pdo->query('SELECT * FROM ubooks WHERE id = :');
while ( $row = $stnt->fetch() )
{
    echo  "<a href='book.php?id=" . $row['id'] . "'>" . $row['title'] . "</a><br>";
}
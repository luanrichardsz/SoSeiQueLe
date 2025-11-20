<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include 'db.php';

    $query = "SELECT * FROM livros";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($livros);
?>
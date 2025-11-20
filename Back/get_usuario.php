<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    include 'db.php';

    $id = isset($_GET['id']) ? $_GET['id'] : die();

    $query = "SELECT id, nome, sobrenome, data_nascimento, nome_usuario FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
    } else {
        echo json_encode(["message" => "Usuário não encontrado."]);
    }
?>
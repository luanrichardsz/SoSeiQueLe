<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");

    include 'db.php';

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id)){
        $query = "DELETE FROM livros WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $data->id);

        if($stmt->execute()){
            echo json_encode(["message" => "Livro apagado."]);
        } else {
            echo json_encode(["message" => "Erro ao apagar."]);
        }
    } else {
        echo json_encode(["message" => "ID não informado."]);
    }
?>
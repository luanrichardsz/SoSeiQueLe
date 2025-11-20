<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");

    include 'db.php';

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id) && !empty($data->titulo)){
        $query = "UPDATE livros SET titulo = :titulo, autor = :autor, ano_publicacao = :ano, genero = :genero, preco = :preco WHERE id = :id";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":titulo", $data->titulo);
        $stmt->bindParam(":autor", $data->autor);
        $stmt->bindParam(":ano", $data->ano_publicacao);
        $stmt->bindParam(":genero", $data->genero);
        $stmt->bindParam(":preco", $data->preco);
        $stmt->bindParam(":id", $data->id);

        if($stmt->execute()){
            echo json_encode(["message" => "Livro atualizado."]);
        } else {
            echo json_encode(["message" => "Erro ao atualizar."]);
        }
    } else {
        echo json_encode(["message" => "ID necessário."]);
    }
?>
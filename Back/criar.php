<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");

    include 'db.php';

    try {
        $data = json_decode(file_get_contents("php://input"));

        if(
            !empty($data->titulo) && 
            !empty($data->autor) && 
            !empty($data->ano_publicacao) && 
            !empty($data->genero) && 
            !empty($data->preco)
        ){
            $precoFormatado = str_replace(',', '.', $data->preco);

            $query = "INSERT INTO livros (titulo, autor, ano_publicacao, genero, preco) VALUES (:titulo, :autor, :ano, :genero, :preco)";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":titulo", $data->titulo);
            $stmt->bindParam(":autor", $data->autor);
            $stmt->bindParam(":ano", $data->ano_publicacao);
            $stmt->bindParam(":genero", $data->genero);
            $stmt->bindParam(":preco", $precoFormatado); // Usa o preço corrigido

            if($stmt->execute()){
                echo json_encode(["message" => "Livro criado com sucesso."]);
            } else {
                echo json_encode(["message" => "Erro ao criar livro."]);
            }
        } else {
            echo json_encode(["message" => "Dados incompletos."]);
        }
    } catch (Exception $e) {
        echo json_encode(["message" => "Erro no Servidor: " . $e->getMessage()]);
    }
?>
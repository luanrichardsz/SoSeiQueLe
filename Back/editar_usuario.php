<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id) && !empty($data->nome) && !empty($data->sobrenome)){
        
        if(!empty($data->senha)) {
            $senha_hash = password_hash($data->senha, PASSWORD_DEFAULT);
            $query = "UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, data_nascimento = :nasc, senha = :senha WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":senha", $senha_hash);
        } else {
            $query = "UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, data_nascimento = :nasc WHERE id = :id";
            $stmt = $pdo->prepare($query);
        }

        $stmt->bindParam(":nome", $data->nome);
        $stmt->bindParam(":sobrenome", $data->sobrenome);
        $stmt->bindParam(":nasc", $data->data_nascimento);
        $stmt->bindParam(":id", $data->id);

        if($stmt->execute()){
            echo json_encode(["message" => "Dados atualizados com sucesso!"]);
        } else {
            echo json_encode(["message" => "Erro ao atualizar."]);
        }
    }
?>
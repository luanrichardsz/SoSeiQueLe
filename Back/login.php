<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");

    include 'db.php';

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->nome_usuario) && !empty($data->senha)){
        $query = "SELECT * FROM usuarios WHERE nome_usuario = :nome";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":nome", $data->nome_usuario);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($data->senha, $row['senha'])){
                // CORREÇÃO IMPORTANTE: Agora devolvemos também o ID
                echo json_encode([
                    "message" => "Login sucesso", 
                    "usuario" => $row['nome'], 
                    "id" => $row['id']
                ]);
            } else {
                echo json_encode(["message" => "Senha incorreta"]);
            }
        } else {
            echo json_encode(["message" => "Usuário não encontrado"]);
        }
    }
?>
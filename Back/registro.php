<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");

    include 'db.php';

    try {

        $data = json_decode(file_get_contents("php://input"));
        if(
            !empty($data->nome) && 
            !empty($data->sobrenome) && 
            !empty($data->data_nascimento) && 
            !empty($data->nome_usuario) && 
            !empty($data->senha)
        ){
            $checkQuery = "SELECT id FROM usuarios WHERE nome_usuario = :user";
            $checkStmt = $pdo->prepare($checkQuery);
            $checkStmt->bindParam(":user", $data->nome_usuario);
            $checkStmt->execute();

            if($checkStmt->rowCount() > 0){
                echo json_encode(["message" => "Este nome de usuário já existe. Escolha outro."]);
            } else {
                $senha_hash = password_hash($data->senha, PASSWORD_DEFAULT);
                $query = "INSERT INTO usuarios (nome, sobrenome, data_nascimento, nome_usuario, senha) 
                        VALUES (:nome, :sobrenome, :nascimento, :user, :senha)";
                
                $stmt = $pdo->prepare($query);

                $stmt->bindParam(":nome", $data->nome);
                $stmt->bindParam(":sobrenome", $data->sobrenome);
                $stmt->bindParam(":nascimento", $data->data_nascimento);
                $stmt->bindParam(":user", $data->nome_usuario);
                $stmt->bindParam(":senha", $senha_hash);

                if($stmt->execute()){
                    echo json_encode(["message" => "Conta criada com sucesso! Faça login."]);
                } else {
                    echo json_encode(["message" => "Erro ao salvar no banco de dados."]);
                }
            }
        } else {
            echo json_encode(["message" => "Por favor, preencha todos os campos."]);
        }
    } catch (Exception $e) {
        echo json_encode(["message" => "Erro no Servidor: " . $e->getMessage()]);
    }
?>
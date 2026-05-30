<?php
    require_once __DIR__ . '/../models/cliente.php';

    class ClienteControllers{
        public function cadastrar(): array{
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                return [
                    "sucesso" => false,
                    "mensagem" => "Requisição inválida"
                ];
            }

            $nome = trim($_POST["nome"]?? "");
            $email = trim($_POST["email"]?? "");
            $telefone = trim($_POST["telefone"]?? "");

            if(empty($nome) || empty($email) || empty($telefone)){
                return [
                    "sucesso" => false,
                    "mensagem" => "Todos os campos são obrigatórios"
                ];
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return [
                    "sucesso" => false,
                    "mensagem" => "Email inválido"
                ];
            }
            try{
                $cliente = new Cliente($nome, $email, $telefone);
                $cliente->salvar();
                if($cliente->salvar()){
                    return [
                        "sucesso" => true,
                        "mensagem" => "Cliente cadastrado com sucesso"
                    ];
                }else{
                    return [
                        "sucesso" => false,
                        "mensagem" => "Erro ao salvar cliente"
                    ];
                }
            } catch (PDOException $erro) {
                return [
                    "sucesso" => false,
                    "mensagem" => "Erro ao cadastrar cliente {$erro->getMessage()}"
                ];
            }
        }
    }
?>
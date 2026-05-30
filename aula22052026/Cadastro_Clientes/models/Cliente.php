<?php
// Revisra caminho ao executar
require_once __DIR__ . '/../config/Database.php';

class Cliente
{
    private int $id;
    private string $nome;
    private string $email;
    private string $telefone;
    private PDO $conexao;

    public function __construct(string $nome, string $email, string $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        // 
        $databse = new Database();
        $this->conexao = $databse->conectar();
    }

    public function salvar()
    {
        $sql = "INSERT INTO clientes (nome,email,telefone) 
        VALUES (:nome,:email,:telefone)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        return $stmt->execute();
    }
}
?>

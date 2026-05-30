<?php
class Database
{
    private $usuario = "root";
    private $dbname = "sistema_clientes";
    private $host = "localhost";
    private $senha = "";
    private $porta = 3307;
    private ?PDO $conexao = null;

    public function conectar(): PDO
    {
        if ($this->conexao === null) {
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;port=$this->porta;dbname=$this->dbname;charset=utf8mb4",
                    $this->usuario,
                    $this->senha
                );
                echo "Conectando ao banco de dados...";
            } catch (PDOException $erro) {
                echo "Erro na conexão: " . $erro->getMessage();
            }
        }
        return $this->conexao;
    }
}

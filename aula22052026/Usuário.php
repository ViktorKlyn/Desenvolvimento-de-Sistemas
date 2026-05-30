<?php
class Usuário{
    public string $senha;

    public function __construct(string $senha)
    {
        $this->senha = $senha;
    }

    public function definirSenha(string $senha): void{
        $this->senha = $senha;
    }

    public function verificarSenha(string $senhaDigitada): bool{
        return $this->senha === $senhaDigitada;
    }

    public function apresentar():string{
        return "<p>Olá usuário!</p>";
    }
}

?>
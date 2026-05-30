<?php
class Produto{
    public string $nome;
    public float $preco;

    // Método que retorna string (texto)
    public function exibirResumo(): string{
        return "Produto: Nome: {$this->nome}, Preço: {$this->preco}";
    }

    // Métodos com parâmetros
    public function calcularDesconto(float $percentual): float{
        return ($this->preco * $percentual)/100;
    }
}
?>
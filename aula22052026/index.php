<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php'); 
$cliente = new Cliente("Maria da Silva", "maria@email.com", "123456");

$cliente->telefone = "43999999999"; //Edita atributo
echo "Exibindo nome do objeto cliente {$cliente->nome}";
echo "Chamada do método apresentar: {$cliente->apresentar()}";
unset($cliente); //Destrói o objeto cliente

// Testando método da classe Produto
require_once('Produto.php'); // importando a classe
$prod = new Produto();
$prod->nome = "Seda - pacote";
$prod->preco = 3.5;

echo "<p> {$prod->exibirResumo()} </p>";
echo "<p>Desconto: {$prod->calcularDesconto(10)}</p>";

require_once('Usuário.php');

$usuario = new Usuário("12345678");
$usuario->definirSenha("123456");

if($usuario->verificarSenha("123456")){
    echo "<p>Senha correta</p>";
} else {
    echo "<p>Senha incorreta</p>";
}
?>
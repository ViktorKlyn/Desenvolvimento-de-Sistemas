<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Lanchonete</title>
</head>
<body>
    <h1>Registro de Pedidos</h1>
    <form method="post">
        <label mb-3>Nome do Cliente:</label>
        <input type="text" name="nome" required>
        <br>

        <label mb-3>Produto principal:</label>
        <select name="produto" required>
            <option value="Hambúrguer">Hambúrguer</option>
            <option value="Pizza">Pizza</option>
            <option value="Sanduíche">Sanduíche</option>
            <option value="Salada">Salada</option>
        </select>
        <br>

        <label mb-3>Tamanho do pedido:</label><br>
        <input type="radio" name="tamanho" value="Pequeno" required> Pequeno
        <input type="radio" name="tamanho" value="Médio"> Médio
        <input type="radio" name="tamanho" value="Grande"> Grande
        <br>

        <label mb-3>Adicionais desejado:</label><br>
        <input type="checkbox" name="adicionais" value="Queijo extra"> Queijo extra
        <input type="checkbox" name="adicionais" value="Bacon"> Bacon
        <input type="checkbox" name="adicionais" value="Molho especial"> Molho especial
        <br>

        <label mb-3>Quantidade</label>
        <input type="number" name="quantidade" min="1" required>
        <br>

        <button type="submit">Enviar Pedido</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $produto = $_POST["produto"];
        $tamanho = $_POST["tamanho"];
        $quantidade = $_POST["quantidade"];
        $adicionais = isset($_POST["adicionais"]) ? $_POST["adicionais"] : [];

        echo "<h3>Seu pedido ficou assim:</h3>";
        echo "<p>Cliente: $nome</p>";
        echo "<p>Você pediu: $produto</p>";
        echo "<p>Tamanho escolhido: $tamanho</p>";
        echo "<p>Quantidade: $quantidade</p>";

        if (!empty($adicionais)) {
            echo "<p>Com os extras: " . implode(", ", $adicionais) . "</p>";
        } else {
            echo "<p>Sem adicionais</p>";
        }
        echo "<hr>";
        echo "<p><strong>Resumo final:</strong> $quantidade x $produto ($tamanho) para $nome</p>";
    }
    ?>
</body>
</html>
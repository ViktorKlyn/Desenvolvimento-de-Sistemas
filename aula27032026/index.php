<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitulo 6</title>
</head>
<body>
    <p>
        <a href="./notas.php'"></a>
    </p>
    <?php

$frutas = array("Maçã", "Banana", "Laranja");
echo ($frutas[0]);

$pessoa = array(
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "Londrina"
);

echo("<br>Nome: ".$pessoa["nome"]."<br>Idade: ".$pessoa["idade"]."<br>Cidade: ".$pessoa["cidade"]."<br>");

foreach ($frutas as $fruta) {
    echo "<p>".$fruta."</p>";
}

$nomes = array("Juliana");
array_push($nomes, "Maria", "Claudia");

print_r($nomes);
echo("<br>Contagem: ". count($nomes));

$nomes2 = array("Juliana");
array_push($nomes2, $frutas);

print_r($nomes2);
echo("<br>Count: ". count($nomes2));

$valores = array(3, 2, 1);
sort($valores);
print_r($valores);
?>
</body>
</html>
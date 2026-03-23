<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo com PHP</title>
</head>
<body>

    <div class="titulo">
        <h1>Bem-vindo com PHP</h1>
    </div>

    <div class="formulario">
        <?php
        if(isset($_GET['name']) && isset($_GET['email'])){
            echo("Bem-Vindo " .$_GET['name']."<br>");
            echo("Seu e-mail eh: " .$_GET['email']);
        } else{
            echo("Dados nao enviados");
        }
        ?>
    </div>

</body>
</html>
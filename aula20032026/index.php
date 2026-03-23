<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário PHP</title>
</head>
<body>

    <div class="titulo">
        <h1>Formulário PHP</h1>
    </div>

    <div class="formulario">
        <form action="welcome.php" method="get">
            <p>
                Nome:
                <input class="texto" type="text" name="name">
            </p>

            <p>
                E-mail:
                <input class="texto" type="text" name="email">
            </p>

            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>
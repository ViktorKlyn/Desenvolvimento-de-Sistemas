<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Soma Condicional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Calculadora Condicional</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Primeiro Número:</label>

                                <input type="number" step="any" name="num1" id="num1" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Segundo Número:</label>
                                <input type="number" step="any" name="num2" id="num2" class="form-control" required>
                            </div>
                            <button type="submit" name="calcular" class="btn btn-primary w-100">Calcular</button>
                        </form>
                        <hr>
                        <?php
                        if (isset($_POST['calcular'])) {
                            $n1 = $_POST['num1'];
                            $n2 = $_POST['num2'];
                            $soma = $n1 + $n2;
                            echo "<div class='alert alert-info'>";
                            echo "<strong>Soma original:</strong> $soma <br>";
                            if ($soma > 10) {
                                $resultado = $soma + 8;
                                echo "<strong>Resultado (Soma + 8):</strong> $resultado";
                            } else {
                                $resultado = $soma - 5;
                                echo "<strong>Resultado (Soma - 5):</strong> $resultado";
                            }
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação Decrescente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white text-center">
                        <h5 class="mb-0">Ordenar Números (Decrescente)</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Número 1</label>
                                <input type="number" name="n1" class="form-control" required step="any">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Número 2</label>
                                <input type="number" name="n2" class="form-control" required step="any">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Número 3</label>
                                <input type="number" name="n3" class="form-control" required step="any">
                            </div>
                            <button type="submit" name="ordenar" class="btn btn-dark w-100">Ordenar</button>
                        </form>
                        <?php
                        if (isset($_POST['ordenar'])) {
                            $numeros = [
                                $_POST['n1'],
                                $_POST['n2'],
                                $_POST['n3']
                            ];
                            rsort($numeros);
                            echo "<div class='mt-4 alert alert-secondary text-center'>";
                            echo "<strong>Resultado:</strong><br>";
                            echo "<span class='fs-4'>" . implode(" &gt; ", $numeros) . "</span>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
                <p class="text-center mt-3 text-muted"><small>Desenvolvido com PHP + Bootstrap</small></p>
            </div>
        </div>
    </div>
</body>

</html>
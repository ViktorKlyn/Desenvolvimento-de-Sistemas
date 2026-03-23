<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra o Mês</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e9ecef;
        }

        .card {
            border-radius: 1rem;
            border: none;
        }

        .btn-custom {
            background-color: #0d6efd;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-primary">Calendário PHP</h3>
                        <p class="text-muted">Digite um número de 1 a 12</p>
                    </div>
                    <form method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text">#</span>
                            <input type="number" name="mes_num" class="form-control form-control-lg"
                                placeholder="Ex: 5" min="1" max="12" required>
                        </div>
                        <button type="submit" name="verificar" class="btn btn-custom w-100 btn-lg shadow-sm">
                            Verificar Mês
                        </button>
                    </form>
                    <?php
                    if (isset($_POST['verificar'])) {
                        $num = intval($_POST['mes_num']);
                        $mes = match ($num) {
                            1 => "Janeiro",
                            2 => "Fevereiro",
                            3 => "Março",
                            4 => "Abril",
                            5 => "Maio",
                            6 => "Junho",
                            7 => "Julho",
                            8 => "Agosto",
                            9 => "Setembro",
                            10 => "Outubro",
                            11 => "Novembro",
                            12 => "Dezembro",
                            default => "Mês inválido"
                        };
                        echo "<div class='mt-4 p-3 bg-light border rounded text-center'>";
                        echo "<span class='text-muted small d-block'>O número $num corresponde a:</span>";
                        echo "<h2 class='text-primary fw-bold mb-0'>$mes</h2>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
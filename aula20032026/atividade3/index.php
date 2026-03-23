<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .btn-cadastro {
            background-color: #6f42c1;
            color: white;
        }

        .btn-cadastro:hover {
            background-color: #59359a;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm p-4">
                    <h3 class="text-center mb-4 text-secondary">Formulário de Registro</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label font-monospace">Nome Completo:</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Ex: Maria Silva" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-monospace">Gênero:</label>
                            <select name="genero" class="form-select" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Outro">Outro / Prefiro não dizer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="idade" class="form-label font-monospace">Idade:</label>
                            <input type="number" name="idade" id="idade" class="form-control" placeholder="Ex: 26" required min="0">
                        </div>
                        <button type="submit" name="enviar" class="btn btn-cadastro w-100 fw-bold">Verificar Cadastro</button>
                    </form>
                    <?php
                    if (isset($_POST['enviar'])) {
                        $nome = htmlspecialchars($_POST['nome']);
                        $genero = $_POST['genero'];
                        $idade = intval($_POST['idade']);
                        echo "<hr class='my-4'>";
                        if ($idade > 17) {
                            echo "<div class='alert alert-success border-0 shadow-sm'>";
                            echo "<p class='mb-1'><strong>Nome:</strong> $nome</p>";
                            echo "<p class='mb-1'><strong>Gênero:</strong> $genero</p>";
                            echo "<h5 class='mt-2 mb-0'>✅ Você pode se cadastrar!</h5>";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-danger border-0 shadow-sm'>";
                            echo "<p class='mb-1'><strong>Nome:</strong> $nome</p>";
                            echo "<p class='mb-1'><strong>Gênero:</strong> $genero</p>";
                            echo "<h5 class='mt-2 mb-0'>❌ Você não pode se cadastrar.</h5>";
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
                <p class="text-center mt-3 text-muted"><small>&copy; 2026 Sistema de Validação</small></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
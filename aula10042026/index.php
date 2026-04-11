<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema Acadêmico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Consultas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Relatórios</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <h1 class="h4 mb-0">Formulário de cadastro</h1>
            </div>

            <div class="card-body">
                <p class="text-muted">
                    Preencha os dados abaixo. O formulário será utilizado para demonstrar validação em PHP.
                </p>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="&lt;?php echo $nome; ?&gt;">
                        <!--?php if ($erros["nome"] !== ""): ?-->
                        <div class="text-danger small"><!--?php echo $erros["nome"]; ?--></div>
                        <!--?php endif; ?-->
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" value="&lt;?php echo $email; ?&gt;">
                        <!--?php if ($erros["email"] !== ""): ?-->
                        <div class="text-danger small"><!--?php echo $erros["email"]; ?--></div>
                        <!--?php endif; ?-->
                    </div>

                    <div class="mb-3">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="number" class="form-control" id="idade" name="idade" value="&lt;?php echo $idade; ?&gt;">
                        <!--?php if ($erros["idade"] !== ""): ?-->
                        <div class="text-danger small"><!--?php echo $erros["idade"]; ?--></div>
                        <!--?php endif; ?-->
                    </div>

                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-select" id="curso" name="curso">
                            <option value="">Selecione</option>
                            <option value="ADS" <?php echo ($curso == "ADS") ? "selected" : ""; ?>>
                                Análise e Desenvolvimento de Sistemas
                            </option>
                            <option value="ES" <?php echo ($curso == "ES") ? "selected" : ""; ?>>
                                Engenharia de Software
                            </option>
                            <option value="CC" <?php echo ($curso == "CC") ? "selected" : ""; ?>>
                                Ciência da Computação
                            </option>
                        </select>
                        <?php if ($erros["curso"] !== ""): ?>
                            <div class="text-danger small"><?php echo $erros["curso"]; ?></div> 
                        <?php endif; ?>
                    </div>


                    <div class="mb-3">
                        <label class="form-label d-block">Turno</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="turno" id="manha" value="Manhã"
                                <?php echo ($turno == "Manhã") ? "checked" : ""; ?>>
                            <label class="form-check-label" for="manha">Manhã</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="turno" id="noite" value="Noite"
                                <?php echo ($turno == "Noite") ? "checked" : ""; ?>>
                            <label class="form-check-label" for="noite">Noite</label>
                        </div>

                        <?php if ($erros["turno"] !== ""): ?>
                            <div class="text-danger small"><?php echo $erros["turno"]; ?></div>
                        <?php endif; ?>
                    </div>


                    <div class="mb-3">
                        <label for="observacoes" class="form-label">Observações</label>
                        <textarea class="form-control" id="observacoes" name="observacoes" rows="4">&lt;?php echo $observacoes; ?&gt;</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar cadastro</button>
                </form>

                <!--?php if (isset($formularioValido) && $formularioValido): ?-->
                <div class="alert alert-success mt-4" role="alert">
                    <h2 class="h5">Dados válidos</h2>
                    <p class="mb-1"><strong>Nome:</strong> <!--?php echo $nome; ?--></p>
                    <p class="mb-1"><strong>E-mail:</strong> <!--?php echo $email; ?--></p>
                    <p class="mb-1"><strong>Idade:</strong> <!--?php echo $idade; ?--></p>
                    <p class="mb-1"><strong>Curso:</strong> <!--?php echo $curso; ?--></p>
                    <p class="mb-1"><strong>Turno:</strong> <!--?php echo $turno; ?--></p>
                    <p class="mb-0"><strong>Observações:</strong> <!--?php echo $observacoes !== "" ? $observacoes : "Nenhuma"; ?--></p>
                </div>
                <!--?php endif; ?-->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
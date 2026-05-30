<?php
require_once __DIR__ . '/../controllers/ClienteControllers.php';

$acao = $_GET['acao'] ?? 'formulario';

if($acao === 'cadstrar'){
    $controller = new ClienteControllers();
    $resultado = $controller->cadastrar();
    require_once __DIR__ . '/views/mensagens.php';
} else {
    require_once __DIR__ . '/views/form_cliente.php';
}
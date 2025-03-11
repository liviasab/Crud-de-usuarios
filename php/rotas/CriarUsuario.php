<?php
header('Content-Type: application/json');
require_once '../UsuarioController.php';

$dados = json_decode(file_get_contents('php://input'), true);
$controlador = new ControladorUsuario();

$resultado = $controlador->criarUsuario($dados);
echo json_encode($resultado);
?>
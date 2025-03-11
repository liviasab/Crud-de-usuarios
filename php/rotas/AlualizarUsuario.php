<?php
header('Content-Type: application/json');
require_once '../UsuarioController.php';

$id = $_GET['id'];
$dados = json_decode(file_get_contents('php://input'), true);
$controlador = new ControladorUsuario();

$resultado = $controlador->atualizarUsuario($id, $dados);
echo json_encode($resultado);
?>
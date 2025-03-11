<?php
header('Content-Type: application/json');
require_once '../UsuarioController.php';

$id = $_GET['id'];
$controlador = new ControladorUsuario();

$resultado = $controlador->excluirUsuario($id);
echo json_encode($resultado);
?>
<?php
header('Content-Type: application/json');
require_once '../UsuarioController.php';

$controlador = new ControladorUsuario();
$usuarios = $controlador->listarUsuarios();

echo json_encode($usuarios);
?>
<?php
require_once '../UsuarioController.php';

header('Content-Type: application/json');

try {
    $dados = json_decode(file_get_contents('php://input'), true);
    $controlador = new ControladorUsuario();
    
    if ($controlador->cadastrar($dados)) {
        echo json_encode(['sucesso' => true, 'mensagem' => 'Usuário registrado com sucesso!']);
    } else {
        throw new Exception('Falha ao processar registro');
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => $e->getMessage()]);
}
?>
<?php
require_once 'BancoDados.php';

class ControladorUsuario {
    private $banco;

    public function __construct() {
        $this->banco = new BancoDados();
    }

    public function cadastrar($dadosUsuario) {
        $conexao = $this->banco->obterConexao();
        
        $consulta = $conexao->prepare(
            "INSERT INTO usuarios (nome, email, senha) 
            VALUES (:nome, :email, :senha)"
        );

        return $consulta->execute([
            ':nome' => $dadosUsuario['nome'],
            ':email' => $dadosUsuario['email'],
            ':senha' => password_hash($dadosUsuario['senha'], PASSWORD_DEFAULT)
        ]);
    }

    
}
?>
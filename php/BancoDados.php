<?php
require_once 'config.php';

class BancoDados {
    private $conexao;

    public function __construct() {
        try {
            $this->conexao = new PDO(
                "mysql:host=" . ConfiguracaoBanco::HOST . ";
                dbname=" . ConfiguracaoBanco::BANCO,
                ConfiguracaoBanco::USUARIO,
                ConfiguracaoBanco::SENHA,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    public function obterConexao() {
        return $this->conexao;
    }
}
?>
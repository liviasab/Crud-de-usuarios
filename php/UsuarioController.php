<?php
require_once 'BancoDados.php';
require_once 'config.php';

class ControladorUsuario {
    private $banco;

    public function __construct() {
        $this->banco = new BancoDados();
    }

    
    public function criarUsuario($dados) {
        try {
            $conexao = $this->banco->obterConexao();
            
            $stmt = $conexao->prepare(
                "INSERT INTO usuarios (nome, email, senha) 
                VALUES (:nome, :email, :senha)"
            );

            $senhaHash = password_hash($dados['senha'], PASSWORD_BCRYPT);
            
            $stmt->execute([
                ':nome' => $dados['nome'],
                ':email' => $dados['email'],
                ':senha' => $senhaHash
            ]);

            return ['sucesso' => true, 'id' => $conexao->lastInsertId()];

        } catch (PDOException $e) {
            $this->logErro($e);
            return ['erro' => 'Falha ao criar usuário'];
        }
    }

    
    public function listarUsuarios() {
        try {
            $conexao = $this->banco->obterConexao();
            $stmt = $conexao->query("SELECT id, nome, email FROM usuarios");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            $this->logErro($e);
            return ['erro' => 'Falha ao listar usuários'];
        }
    }

   
    public function atualizarUsuario($id, $dados) {
        try {
            $conexao = $this->banco->obterConexao();
            
            $campos = [];
            if(isset($dados['nome'])) $campos[] = "nome = :nome";
            if(isset($dados['email'])) $campos[] = "email = :email";
            if(isset($dados['senha'])) {
                $senhaHash = password_hash($dados['senha'], PASSWORD_BCRYPT);
                $campos[] = "senha = :senha";
            }

            if(empty($campos)) {
                return ['erro' => 'Nenhum dado para atualizar'];
            }

            $sql = "UPDATE usuarios SET " . implode(', ', $campos) . " WHERE id = :id";
            $stmt = $conexao->prepare($sql);

            $params = [':id' => $id];
            if(isset($dados['nome'])) $params[':nome'] = $dados['nome'];
            if(isset($dados['email'])) $params[':email'] = $dados['email'];
            if(isset($senhaHash)) $params[':senha'] = $senhaHash;

            $stmt->execute($params);
            
            return ['sucesso' => $stmt->rowCount() > 0];

        } catch (PDOException $e) {
            $this->logErro($e);
            return ['erro' => 'Falha na atualização'];
        }
    }

    
    public function excluirUsuario($id) {
        try {
            $conexao = $this->banco->obterConexao();
            $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id = :id");
            $stmt->execute([':id' => $id]);
            
            return ['sucesso' => $stmt->rowCount() > 0];

        } catch (PDOException $e) {
            $this->logErro($e);
            return ['erro' => 'Falha ao excluir usuário'];
        }
    }

   
    private function logErro($excecao) {
        error_log(
            "[" . date('Y-m-d H:i:s') . "] ERRO: " . 
            $excecao->getMessage() . " em " . 
            $excecao->getFile() . ":" . 
            $excecao->getLine()
        );
    }
}
?>
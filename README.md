# CRUD de Usuários - PHP + MySQL

Sistema simples para gerenciamento de usuários com operações básicas de cadastro.

## 🛠 Como Usar

### Pré-requisitos
- XAMPP/WAMP/MAMP instalado
- PHP 7.4+
- MySQL 5.7+
- Navegador moderno

### Passo a Passo

1. **Clonar Repositório**
```bash
git clone https://github.com/seu-usuario/crud-php.git
cd crud-php
Configurar Banco de Dados

bash
Copy
mysql -u root -p < database.sql
Configurar Ambiente
Edite o arquivo .env na raiz do projeto:

env
Copy
DB_HOST=localhost
DB_NAME=crud_usuarios
DB_USER=root
DB_PASS=
Iniciar Servidor PHP

bash
Copy
php -S localhost:8000
Acessar o Sistema
Abra no navegador:
http://localhost:8000

⚙️ Dica Rápida
Use admin@exemplo.com / senha123 para testar login (se implementado)

Para reiniciar dados: execute database.sql novamente
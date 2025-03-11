
# 📋 CRUD de Usuários

Sistema completo de cadastro de usuários com todas as operações CRUD.

## 🛠 Stack Tecnológica

**Frontend**  
| Tecnologia | Função |
|------------|--------|
| HTML5 | Estrutura semântica |
| Bootstrap 5 | Estilização responsiva |
| JavaScript | Interações dinâmicas |

**Backend**  
| Tecnologia | Função |
|------------|--------|
| PHP 8+ | Lógica de negócio |
| MySQL 8+ | Armazenamento de dados |
| PDO | Conexão segura com banco |

**Ferramentas**  
| Tecnologia | Função |
|------------|--------|
| Composer | Gerenciamento de dependências |
| XAMPP | Ambiente de desenvolvimento |

---

## 🚀 Instalação Passo a Passo

### Pré-requisitos
- Servidor web (XAMPP/WAMP/MAMP)
- PHP ≥ 8.0
- MySQL ≥ 8.0
- Git (opcional)

### Configuração Inicial
1. **Clonar repositório**
```bash
git clone https://github.com/seu-usuario/crud-completo.git
cd crud-completo
Banco de Dados

bash
Copy
mysql -u root -p < database.sql
Configurar Ambiente

bash
Copy
cp .env.example .env
# Edite com suas credenciais:
nano .env
Dependências PHP

bash
Copy
composer install
Iniciar Servidor

bash
Copy
php -S localhost:8000
Acessar Sistema

Copy
http://localhost:8000

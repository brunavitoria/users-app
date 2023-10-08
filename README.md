# users-app
Aplicação em PHP que posibilite a criação de usuários e a exibição da listagem em tempo real à medida que novos usuários vão sendo adicionados ao sistema.

## Dependências
- PHP 7.4.3
- MySQL 8.0.23
- Apache 2.4.46

## Setup
- Clone o repositório através do comando:
```bash
git clone https://github.com/brunavitoria/users-app.git
```
- Execute o script de criação do banco de dados e tabelas (database/usersappDB.sql) no seu banco de dados. Ou através do comando (subistituindo o "caminho-do-projeto" pelo caminho do projeto no seu computador): 
```bash
mysql -u root -p < ~/caminho-do-projeto/users-app/database/usersappDB.sql
```
- Altere as variáveis do arquivo de conexão com o banco de dados (database/conectDB.sql) para suas configurações. Veja o exemplo abaixo:
```bash
$servername = "localhost"; // Nome do servidor do banco de dados
$username = "seu_usuario";  // Nome de usuário do banco de dados
$password = "sua_senha";    // Senha do banco de dados
$database = "usersapp";    // Nome do banco de dados do projeto
```

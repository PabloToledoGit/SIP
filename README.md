# Sistema de Inventário de Patrimônios (SIP)

O Sistema de Inventário de Patrimônios (SIP) é uma aplicação PHP desenvolvida para gerenciar o inventário de patrimônios do escritório Sarton. Este sistema inclui funcionalidades de login e cadastro de usuários para controle seguro das informações.

## Funcionalidades

- **Login de Usuário:** Permite que usuários autorizados acessem o sistema.
- **Cadastro de Usuário:** Permite o registro de novos usuários com diferentes níveis de acesso.

## Estrutura do Projeto

O projeto está estruturado da seguinte forma:

- **assets/**: Contém arquivos CSS e HTML5 para a interface do usuário.
- **includes/**: Contém arquivos PHP importantes como configurações e funções.
- **screens/**: Diretório para armazenar capturas de tela ou imagens relacionadas ao projeto.
- **index.php**: Página inicial do sistema.
- **login.php**: Página para login de usuários.
- **register.php**: Página para registro de novos usuários.
- **database.sql**: Script SQL para criação das tabelas no banco de dados.

## Pré-requisitos

Para executar este projeto localmente, é necessário ter instalado:

- **XAMPP**: Ambiente de desenvolvimento PHP que inclui Apache, MySQL, PHP e phpMyAdmin.

Certifique-se de importar o arquivo `database.sql` para criar as tabelas necessárias no MySQL.

## Configuração

1. Clone o repositório:

   ```bash
   git clone https://github.com/PabloToledoGit/SIP.git
Coloque os arquivos na pasta htdocs do XAMPP (ou pasta equivalente).

Inicie o Apache e MySQL no XAMPP.

Importe o arquivo database.sql usando phpMyAdmin para criar o banco de dados e suas tabelas.

Configure as credenciais de acesso ao banco de dados editando o arquivo includes/config.php:

php
Copiar código
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'nome_do_seu_banco_de_dados');
Substitua nome_do_seu_banco_de_dados pelo nome do banco de dados que você criou.

Executando o Projeto
Acesse o sistema pelo navegador:

bash
Copiar código
http://localhost/SIP/login.php

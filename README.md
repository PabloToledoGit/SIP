# Sistema de Inventário de Patrimônios (SIP)

O Sistema de Inventário de Patrimônios (SIP) é uma aplicação PHP desenvolvida para gerenciar o inventário de patrimônios do escritório Sarton. Este sistema inclui funcionalidades de login e cadastro de usuários para controle seguro das informações.

## Funcionalidades

- **Login de Usuário:** Permite que usuários autorizados acessem o sistema.
- **Cadastro de Usuário:** Permite o registro de novos usuários com diferentes níveis de acesso.
- - **Armazenamento de inventário:** Permite o registro de novos itens ao utilizar o CRUD.(AINDA NÃO FUNCIONAL)

## Estrutura do Projeto

O projeto está estruturado da seguinte forma:

- **pages/**: Contém arquivos CSS e HTML5 para a interface do usuário.
- **db/**: Contém arquivos PHP importantes como configurações e funções.
- **img/**: Diretório para armazenar capturas de tela ou imagens relacionadas ao projeto.
- **login.php**: Página para login de usuários.
- **formulario.php**: Página para registro de novos usuários.

## Pré-requisitos

Para executar este projeto localmente, é necessário ter instalado:

- **XAMPP**: Ambiente de desenvolvimento PHP que inclui Apache, MySQL, PHP e phpMyAdmin.

## Configuração

1. Clone o repositório:

   ```bash
   git clone https://github.com/PabloToledoGit/SIP.git
Coloque os arquivos na pasta htdocs do XAMPP (ou pasta equivalente).

Inicie o Apache e MySQL no XAMPP.

Configure as credenciais de acesso ao banco de dados editando o arquivo db/config.php:

Executando o Projeto
Acesse o sistema pelo navegador: http://localhost/sisLogin/pages/login/login.php
![SIP-1](https://github.com/PabloToledoGit/SIP/assets/132606113/8957c533-256b-48b8-9339-07e35499549b)
![SIP-2](https://github.com/PabloToledoGit/SIP/assets/132606113/91df8f97-9bb6-4c79-8197-bfcc4fe47420)
![SIP-3](https://github.com/PabloToledoGit/SIP/assets/132606113/cbb46969-43e4-4347-9e31-c21c53c86893)



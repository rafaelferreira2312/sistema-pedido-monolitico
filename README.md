# Especificações do Projeto: Sistema de Pedidos Monolítico

##Introdução
Este documento especifica a implementação de uma aplicação monolítica para gerenciamento de pedidos. A aplicação inclui um back-end com funcionalidades de CRUD para usuários e pedidos, e um front-end com autenticação e gerenciamento de pedidos.

##Tecnologias Utilizadas

    -PHP Moderno (sem frameworks)
    -PostgreSQL como banco de dados relacional
    -Docker para containerização
    -ORM: Eloquent (opcional, justificar escolha)
    -Tailwind CSS para estilização do front-end
    JavaScript para funcionalidades do front-end

##Estrutura do Projeto

project-root/
├── back-end/
│   ├── controllers/
│   ├── models/
│   ├── routes/
│   ├── tests/
│   └── index.php
├── front-end/
│   ├── components/
│   ├── pages/
│   ├── styles/
│   └── index.html
├── docker-compose.yml
└── README.md

##Configuração e Execução

Setup em um Comando
Utilize um script Makefile para facilitar o setup e execução da aplicação:


setup:
    docker-compose up --build

##Back-end
Modelos de Dados
Usuário

Tabela: users

    id (int, primary key)
    first_name (string)
    last_name (string)
    document (string, encrypted)
    email (string, encrypted)
    phone_number (string, encrypted)
    birth_date (date)
    created_at (timestamp)
    updated_at (timestamp)

Pedido

Tabela: orders

    id (int, primary key)
    user_id (int, foreign key)
    description (text)
    quantity (int)
    price (decimal)
    created_at (timestamp)
    updated_at (timestamp)

Rotas
Usuários

    GET /users - Listar todos os usuários
    GET /users/{id} - Exibir um usuário
    POST /users - Criar um novo usuário
    PUT /users/{id} - Atualizar um usuário
    DELETE /users/{id} - Excluir um usuário

Pedidos

    GET /orders - Listar todos os pedidos
    GET /orders/{id} - Exibir um pedido
    POST /orders - Criar um novo pedido
    PUT /orders/{id} - Atualizar um pedido
    DELETE /orders/{id} - Excluir um pedido

Autenticação

    Página de login e registro de novos usuários
    Sessões gerenciadas com tokens JWT

Testes

    Testes unitários para as rotas de usuários e pedidos
    Utilização de PHPUnit para criação dos testes

Front-end
Componentes
Sidebar

    Links para Módulo de Autenticação e Módulo de Pedidos

Cabeçalho

    Informações do usuário logado

Páginas

    Login
    Registro de Usuários
    Listagem de Usuários
    Criação de Pedidos
    Listagem de Pedidos
    Atualização de Pedidos
    Listagem de Pedidos por Usuário

Fluxo de Autenticação

    Página de login para autenticar usuários
    Página de registro para criação de novos usuários

Fluxo de Pedidos

    Página para criar novos pedidos
    Página para listar todos os pedidos
    Página para atualizar um pedido existente
    Página para listar pedidos de um usuário específico

Estilização

    Utilização de Tailwind CSS para estilização
    Implementação de modo dark coerente com o tema escolhido

Pontos Bônus

    Criptografia reversível de dados sensíveis usando uma biblioteca como php-encryption
    Histórico de commits bem documentado
    Páginas responsivas para melhor experiência em dispositivos móveis
    Passo-a-passo detalhado do processo de deploy

##Considerações Finais

O projeto deve seguir as melhores práticas de segurança, estilo de código, e desenvolvimento testável. A documentação clara e o uso de ferramentas modernas são essenciais para o sucesso da aplicação.


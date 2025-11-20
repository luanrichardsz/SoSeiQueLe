# 📚 Só Sei Que Lê - Sistema de Gestão de Livraria

Sistema web completo para gerenciamento de acervo de livros, incluindo funcionalidades de CRUD (Criar, Ler, Atualizar e Deletar), autenticação de usuários e gestão de perfil.

![Status do Projeto](https://img.shields.io/badge/Status-Concluído-brightgreen)
![Licença](https://img.shields.io/badge/Licença-MIT-blue)

## 🖼️ Preview

### Tela de Login
<img width="1359" height="598" alt="image" src="https://github.com/user-attachments/assets/92f73979-2695-46d1-a30b-89ff60221cbf" />

### Tela de Cadastro
<img width="1359" height="596" alt="image" src="https://github.com/user-attachments/assets/82dd614c-1413-482d-91e4-8ee096b72dbe" />
<img width="1915" height="913" alt="image" src="https://github.com/user-attachments/assets/69dd5b2a-c0c3-4394-b56a-6be1ed037306" />

### Painel de Gestão (CRUD)
<img width="1343" height="599" alt="image" src="https://github.com/user-attachments/assets/79c79af9-926d-41bf-8d74-22a9b4581757" />

### Painel de Gestão do Usuario (CRUD)
<img width="1915" height="911" alt="image" src="https://github.com/user-attachments/assets/f6646eef-a49a-4048-9627-c41f355ae656" />

---

## 🚀 Funcionalidades

- **Autenticação Segura:**
  - Login e Cadastro de Usuários.
  - Criptografia de senha (Hash) para segurança no banco de dados.
  - Sessão via LocalStorage.
  
- **Gestão de Livros (CRUD):**
  - **C**adastrar novos livros (Título, Autor, Categoria, Ano, Preço).
  - **R**ead: Listagem dinâmica com tabela responsiva.
  - **U**pdate: Edição rápida de informações.
  - **D**elete: Remoção de livros com confirmação de segurança.

- **Perfil do Usuário:**
  - Edição de dados pessoais (Nome, Sobrenome, Data de Nascimento).
  - Alteração de senha segura.

- **Interface:**
  - Design moderno e limpo.
  - Responsivo (funciona em Celular e PC).
  - Navegação intuitiva.

---

## 🛠️ Tecnologias Utilizadas

- **Front-end:**
  - HTML5 & CSS3
  - JavaScript (Fetch API para consumo do Backend)
  - [Bootstrap 5](https://getbootstrap.com/) (Estilização e Responsividade)
  - Bootstrap Icons

- **Back-end:**
  - PHP 8.0+ (API RESTful)

- **Banco de Dados:**
  - MySQL

---

## 🔧 Como Rodar o Projeto

### Pré-requisitos
- Ter o **XAMPP** instalado (ou outro servidor Apache/MySQL).
- Navegador Web moderno.
- Git instalado.

### Passo a Passo

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/luanrichardsz/SoSeiQueLe.git](https://github.com/luanrichardsz/SoSeiQueLe.git)

Coloque a pasta do projeto dentro de C:\xampp\htdocs\.

2. **Configure o Banco de Dados:**

Abra o PHPMyAdmin (http://localhost/phpmyadmin).

Vá na aba SQL e execute o script abaixo completo para criar o banco e popular com dados:

    ```bash
    -- 1. Criação do Banco
    CREATE DATABASE IF NOT EXISTS soseiquele;
    USE soseiquele;
    
    -- 2. Tabela de Usuários
    CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        sobrenome VARCHAR(50) NOT NULL,
        data_nascimento DATE NOT NULL,
        nome_usuario VARCHAR(50) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL
    );
    
    -- 3. Tabela de Livros
    CREATE TABLE IF NOT EXISTS livros (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(100) NOT NULL,
        autor VARCHAR(100) NOT NULL,
        ano_publicacao INT NOT NULL,
        genero VARCHAR(50) NOT NULL,
        preco DECIMAL(10, 2) NOT NULL
    );
    
    -- 4. Dados Iniciais (Opcional)
    INSERT INTO livros (titulo, autor, ano_publicacao, genero, preco) VALUES 
    ('Clean Code', 'Robert C. Martin', 2008, 'Técnico', 95.00),
    ('O Senhor dos Anéis', 'J.R.R. Tolkien', 1954, 'Fantasia', 120.50),
    ('Dom Casmurro', 'Machado de Assis', 1899, 'Romance', 45.90),
    ('1984', 'George Orwell', 1949, 'Ficção', 39.90),
    ('Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 1997, 'Fantasia', 55.00),
    ('Entendendo Algoritmos', 'Aditya Y. Bhargava', 2017, 'Técnico', 62.00),
    ('Orgulho e Preconceito', 'Jane Austen', 1813, 'Romance', 35.00),
    ('Duna', 'Frank Herbert', 1965, 'Ficção', 75.90),
    ('O Hobbit', 'J.R.R. Tolkien', 1937, 'Fantasia', 49.90),
    ('Padrões de Projeto', 'Erich Gamma', 1994, 'Técnico', 150.00);

---

3. **Verifique a Conexão:**

Abra o arquivo Back/db.php e confira se a senha do banco está correta (no XAMPP padrão é vazia '').

4. **Acesse o Sistema:**

Abra o navegador e digite: http://localhost/SoSeiQueLe/

## 📂 Estrutura do Projeto

  ```bash
  SoSeiQueLe/
  ├── index.html          # Tela de Login (Entrada do Sistema)
  ├── Back/               # API (PHP)
  │   ├── db.php          # Conexão com Banco de Dados
  │   ├── criar.php       # Criar livro
  │   ├── listar.php      # Listar livros
  │   ├── ...             # Outros scripts PHP
  ├── Front/              # Telas do Sistema
  │   └── src/
  │       ├── crud.html       # Painel Principal
  │       ├── registro.html   # Criar Conta
  │       └── perfil.html     # Editar Perfil

---

## 👤 Autores
<table> <tr> <td align="center"> <a href="https://www.google.com/search?q=https://github.com/luanrichardsz"> <img src="https://www.google.com/search?q=https://github.com/luanrichardsz.png" width="100px;" alt="Foto do Luan Richards"/>


<sub> <b>Luan Richards</b> </sub> </a> </td> <td align="center"> <a href="https://www.google.com/search?q=https://github.com/USUARIO_DA_MARIANA"> <img src="https://www.google.com/search?q=https://github.com/USUARIO_DA_MARIANA.png" width="100px;" alt="Foto da Mariana Mendes"/>


<sub> <b>Mariana Mendes</b> </sub> </a> </td> <td align="center"> <a href="https://www.google.com/search?q=https://github.com/USUARIO_DO_KAUA"> <img src="https://www.google.com/search?q=https://github.com/USUARIO_DO_KAUA.png" width="100px;" alt="Foto do Kãua Felipe"/>


<sub> <b>Kãua Felipe</b> </sub> </a> </td> </tr> </table>

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

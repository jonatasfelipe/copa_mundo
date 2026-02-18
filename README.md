# ⚽ Sistema de Gerenciamento da Copa do Mundo (MVC - PHP)

Este projeto é um sistema web desenvolvido em **PHP utilizando o padrão MVC (Model-View-Controller)** com o objetivo de gerenciar informações de uma Copa do Mundo.

Ideal para fins educacionais, o sistema permite trabalhar conceitos como:
- Programação Orientada a Objetos (POO)
- Arquitetura MVC
- Banco de Dados Relacional (MySQL)
- CRUD completo
- Regras de negócio (classificação de times)

---

## 📌 Funcionalidades

### 🟢 1. Gerenciamento de Seleções
- Cadastrar seleção
- Editar seleção
- Excluir seleção
- Listar seleções

### 🟢 2. Gerenciamento de Usuários
- Cadastro de usuários (jogador, técnico, árbitro, etc.)
- Associação com seleção
- Listagem, edição e exclusão

### 🟢 3. Gerenciamento de Grupos
- Criação de grupos (A, B, C...)
- Associação de seleções
- Listagem por grupo

### 🟢 4. Gerenciamento de Jogos
- Cadastro de partidas com:
  - Seleção mandante e visitante
  - Data e horário
  - Estádio
  - Grupo ou fase

### 🟢 5. Registro de Resultados
- Inserção de placares
- Atualização automática de estatísticas

### 🟢 6. Classificação
- Tabela por grupo com:
  - Pontos
  - Vitórias, empates e derrotas
  - Saldo de gols
  - Gols marcados

---

## 🏗️ Estrutura do Projeto
```copa_mundo/
│
├── app/
│ ├── controllers/
│ ├── models/
│ └── views/
│
├── config/
│ └── database.php
│
├── public/
│ └── index.php
│
└── README.md
```
---

## ⚙️ Tecnologias Utilizadas

- PHP (POO)
- MySQL
- HTML5
- CSS3
- Arquitetura MVC

---

## 🗄️ Banco de Dados

1. Crie o banco:
```sql
CREATE DATABASE copa_mundo;
```

2. Configure o acesso em:

- config/database.php

## ▶️ Como Executar o Projeto

1. Clone o repositório:

```git clone https://github.com/jonatasfelipe/copa_mundo.git```

2. Coloque o projeto em um servidor local:

- XAMPP

- WAMP

- Laragon

# Acesse no navegador:

http://localhost/copa_mundo/public

## 🎯 Objetivo Educacional

Este projeto foi desenvolvido para auxiliar alunos no aprendizado de:

- Separação de responsabilidades (MVC)

- Integração com banco de dados

- Organização de código

- Lógica de negócio aplicada (classificação de times)

## 🚀 Possíveis Melhorias

- Sistema de login/autenticação

- Interface com Bootstrap

- API REST

- Automatização da classificação via triggers

- Dashboard com estatísticas

## 👨‍🏫 Autor

- Projeto criado para fins educacionais.

## 📄 Licença

- Este projeto pode ser utilizado livremente para fins acadêmicos.

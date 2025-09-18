# Referência de comandos SQL para modelagem fisica

## Projeto: Fly By Night - Gerenciamento de Estoque

```sql
-- Criação de BD usando UFT8
CREATE DATABASE flybynigth_renato CHARACTER SET utf8mb4;
```

```sql
--Criação da tabela de Fornecedores
CREATE TABLE fornecedores(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);
```

```sql
CREATE TABLE produtos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL (10,2) NOT NULL,

    -- Aqui, criamos fornecedor_id como uma coluna/campo comun
    fornecedor_id INT NOT NULL,

    -- E aqui, transformamos fornecedor_id em uma  CHAVE ESTRANGEIRA
    -- que faz REFERENCIA à CHAVE PRIMARIA (id) de outra tabela
    -- (fornecedores)
    FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
);
```

```sql
CREATE TABLE lojas(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);
```
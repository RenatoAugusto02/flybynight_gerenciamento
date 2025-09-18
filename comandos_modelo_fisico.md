# Referência de comandos SQL para modelagem fisica

## Projeto: Fly By Night - Gerenciamento de Estoque

```sql
CREATE DATABASE flybynigth_renato CHARACTER SET utf8mb4;
```

```sql
CREATE TABLE fornecedores(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);
```
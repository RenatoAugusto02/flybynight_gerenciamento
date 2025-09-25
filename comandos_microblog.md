# comandos usados para o projeto Microblog

## Modelagem conceitual

### Criar banco de dados

### Criar a tabela usuario

### Criar a tabela noticias

```sql
CREATE DATABASE microblog_renato CHARACTER SET utf8mb4;
```

```sql
CREATE TABLE usuario(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    tipo  ENUM('admin', 'editor') NOT NULL,
    email  VARCHAR(100) NOT NULL,
    senha  VARCHAR(255) NOT NULL,
);
```

```sql
CREATE TABLE noticia(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(25) NOT NULL,
    texto TEXT NOT NULL,
    resumo TEXT NOT NULL,
    imagem VARCHAR(50) NOT NULL,
    data_publicacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);
```
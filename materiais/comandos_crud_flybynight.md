# Comandos CRUD para o projeto Fly By Night

```sql
INSERT INTO fornecedores(nome) VALUES('Eletrônicos Tabajaro');

```

```sql
INSERT INTO produtos (nome, descricao, preco, quantidade, fornecedor_id) VALUES(
    'Smartphone Galaxy S23',
    'Equipamento com sistema Android e câmera Full HD',
    1599.50,
    20,
    1
);
```

```sql
INSERT INTO produtos (nome, descricao, preco,quantidade, fornecedor_id) VALUES(
    'TV Led',
    'Tela de 50 polegadas, 4k, 4 entradas HDMI e tec e tal',
    3420,
    6,
    1
);
```

```sql
INSERT INTO produtos (nome, descricao, preco,quantidade, fornecedor_id) VALUES(
    'Mein Kampf',
    'LIvro do ditador da 2 guerra mundial',
    19.45,
    6,
    4
);
```

## Inserindo lojas

```sql
INSERT INTO lojas (nome) VALUES
('Casas Bahia'),
('Shopping Zona Leste'),
('Bazar das coisas'),
('Americanas');
```

## Inserindo estoque de produtos para cada loja

```sql
INSERT INTO lojas_produtos (loja_id, produto_id, estoque) VALUES
(4, 2, 2),
(4, 3, 30),
(1, 2, 10),
(4, 1, 5); 
```

```sql
UPDATE fornecedores SET nome = 'Distribuidora XYZ' 
WHERE id = 3;

UPDATE produtos SET preco = 2600.77, quantidade = 90 
WHERE id = 1;

UPDATE produtos SET preco = 125
WHERE fornecedor_id = 4;


UPDATE loja_produtos SET estoque = 7
WHERE loja_id = 4 AND produto_id = 1;
```

## Excluindo registros

```sql
DELETE FROM produtos WHERE id = 4;
```

## Realizando consultas para vizualização de dados

```sql
-- Contando quantos registros existem na tabela produtos
-- O * representa todas as linhas/registros
SELECT COUNT(*) FROM produtos;

-- Exibir apenas o nome, preço e quantidade dos produtos
SELECT nome, preco, quantidade FROM produtos;

-- Exibir apenas o nome, preço e quantidade dos produtos
-- que custem acima de 1000 reais
SELECT nome, preco, quantidade FROM produtos
WHERE preco > 1000;

-- Exibir somente o nome e a descrição dos produtos
-- fornecedor Livraria Demais da Conta

-- Versão 1: só considera a tabela de produtos
SELECT nome, descricao, fornecedor_id FROM produtos
WHERE fornecedor_id = 4;

-- Versão 2: usamos um JUNÇÃO de tabelas (produtos e fornecedores)
-- O objetivo é conseguir trazer/exibir TAMBÉM o nome do FORNECEDOR
SELECT 
    produtos.nome,
    produtos.descricao,
    fornecedores.nome
FROM produtos JOIN fornecedores
ON produtos.fornecedores_id = fornecedores.id
WHERE produtos.fornecedor_id = 4;
```
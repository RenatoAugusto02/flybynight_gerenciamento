<?php
    require_once "../src/fornecedor_crud.php";

    $fornecedores = buscarFornecedores($conexao);

    //var_dump($fornecedores);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fornecedores</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    
<h1>Fornecedores</h1>
<a href="">Novo fornecedor</a>
<a href="../index.php">Voltar</a>

<!-- Estruturando uma tabela HTML para exibir os dados -->
 <table>
    <caption>Relação de Fornecedores</caption>
    <tr>
        <th>ID</th>
        <th>NOME</th>
    </tr>
    <!-- As linhas abaixo (tr/td) serão geradas dinamicamente, ou seja, usando loops(foreach) no array ($fornecedor)-->
     <?php foreach($fornecedores as $fornecedador) { ?>

        <tr>
            <td>ID</td>
            <td>Nome</td>
        </tr>


     <?php }?>
 </table>

</body>
</html>
<?php
/*Neste arquivo teremos todas as funções que serão usadas
para manipulação (CRUD) de fornecedores em nosso sistema e 
banco de dados*/ 

require_once "../conecta.php";

function buscarFornecedores($conexao) { 
    $sql = "SELECT * FROM fornecedores";
    $consulta = $conexao -> query($sql);  
    return $consulta -> fetchAll(); 
};

function buscarFornecedore($conexao, $nome){
    $sql = "INSERT INTO fornecedores (nome) VALUES(:nome)";
    $consulta = $conexao -> prepare($sql);
    $consulta->bindValue(":nome", $nome);
    $consulta->execute();
};
?>
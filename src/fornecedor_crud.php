<?php
/*Neste arquivo teremos todas as funções que serão usadas
para manipulação (CRUD) de fornecedores em nosso sistema e 
banco de dados*/ 

require_once "../conecta.php";

function buscarFornecedores($conexao) { 
    $sql = "SELECT * FROM fornecedores";
    $consulta = $conexao -> query($sql);  
    return $consulta -> fetchAll(); 
}
?>
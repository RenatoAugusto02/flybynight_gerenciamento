<?php
/*Script de conecxão ao servidor de banco de dados.
Este arquivo é o responsável por permitir a comunicação entre 
seu site/projeto e o servidor MySQL*/


// Paramêtros para conecxão
$servidor = 'localhost'; // padrão do XAMPP
$banco = 'flybynigth_renato';
$usuario = 'root'; // padrão do XAMPP
$senha = ''; // padrão do XAMPP

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha); 
    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch(PDOException $erro) {
    die("Erro ao conectar". $erro->getMessage());
}



/* try {
    $conexao = new PDO(
        "mysql:host=$servidor;dbname=$banco;charset=utf8", 
        $usuario, $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $erro){
    die("Erro ao conectar: ".$erro->getMessage());
} */

?>
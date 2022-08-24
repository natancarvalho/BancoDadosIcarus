<?php
 /* Dados do Banco de Dados a conectar */
$Servidor = "localhost:3306";
$nomeBanco = "dados_treino_setup";
$nomeBanco2 = "dados_estrutural";
$nomeBanco3 = "dados_usuarios";
$Usuario = "root";
$Senha = "C@rvalhoBd";
$strcon = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco);
$strcon2 = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco2); 
$strcon3 = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco3);
?>


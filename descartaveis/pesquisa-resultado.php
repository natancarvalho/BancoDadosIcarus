<?php
 // Conectando ao banco de dados:
 require "conectar.php";
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['Tipo_Dados'];
 switch ($pesquisa) {
    case "tb_temperaturas":
        include_once ("consultar_temperatuas.php");
        break;
    case "tb_setup_susp":
        include_once ("consultar_setup_suspensao.php");
        break;
    case "tb_caracteristica_carro":
        include_once ("consultar_caracteristica_carro.php");
        break;
    case "tb_fornecedores":
        include_once ("consultar_fornecedores_serviços.php");
        break;
}
?>

 
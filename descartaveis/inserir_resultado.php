<?php
 // Conectando ao banco de dados:
 require "conectar.php";
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['Tipo_Dados'];
 switch ($pesquisa) {
    case "tb_temperaturas":
        include_once ("inserir_temperaturas.php");
        break;
    case "tb_setup_susp":
        include_once ("inserir_setup_suspensao.php");
        break;
    case "tb_caracteristica_carro":
        include_once ("inserir_caracteristica_carro.php");
        break;
}
?>
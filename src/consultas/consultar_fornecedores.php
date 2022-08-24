<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lista de Fornecedores</title>
    <?php 

      exibirHead();
    ?>
  </head>

 <body>
   <?php 
     require "../html/navbar_home.php";
   ?>
   <div class="container-fluid">
     <h4>Lista de Fornecedores</h4>
   </div>
   <div class="container-fluid">
     <?php
       require "../html/filtros.php"; 
       $filtros = filtroFornecedores();
       echo $filtros;
     ?>
   </div><br>
   <div class = "container-fluid">
     <?php
     //$responsavel = $_POST['responsavel'];
     //$situacao = $_POST['situacao'];
     require "../html/exibir_tabelas.php";
     ?>
   </div> 
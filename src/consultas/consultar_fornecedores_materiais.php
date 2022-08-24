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
   <div class = "container-fluid">
     <?php
     require "../html/filtros.php";
     $filtros = filtroFornecedores();
     echo $filtros;
     ?>
   </div>

<div>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 require "../funcoes/conectar.php";
/*
 $nome_tabelaA = "tb_Fornecedores";
 $nome_tabelaB = "tb_Fornecedor_Material";
 $ChaveA = "Codigo";
 $ChaveB = "Codigo";

 $nomes_colunas = get_col_names($strcon2,"tb_Fornecedor_Material");

  $sql = makeQuery($nome_tabelaA, $nome_tabelaB, $ChaveA, $ChaveB, $nomes_colunas);*/

  $sql = queryFornecedoresMateriais ($strcon2);

  $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
 
  echo myTable($strcon2, $sql, "Lista de Fornecedores");
  
  ?>
</div>
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
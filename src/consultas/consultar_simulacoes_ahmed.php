<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php 

       exibirHead();
    ?>
    <title>Simulaçoes de Ahmed Body</title>
  </head>

 <body>
   <?php 
     require "../html/navbar_home.php";
   ?>
  <div class="container-fluid">
   <h4>Simulações de Ahmed Body</h4>
   </div>
   <div class = "container-fluid">
     <?php
     require "../html/filtros.php";
     $filtros = filtroAhmed();
     echo $filtros;
     ?>
   </div><br>
<div>

 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 require "../funcoes/conectar.php";
 require "../html/exibir_tabelas_ahmed.php";
 
 //  $nomes_colunas = get_col_names($strcon2,"tb_Dominio_Fluido");
//  //$nomes_colunas2 = get_col_names($strcon2,"tb_Influencia1_Carbox1");
//  $nome_tabelaA = "tb_Simulacoes_Ahmed_Geo";
//  $nome_tabelaB = "tb_Dominio_Fluido";
//  //$nome_tabelaC = "tb_Influencia1_Carbox1";
//  $ChaveA = "Cod_Simulacao";
//  $ChaveB = "Cod_Simulacao";


//  /*$select = "SELECT ".$nome_tabelaA.".*";
//  $from = " FROM (".$nome_tabelaA;
//  $join1 = " INNER JOIN ".$nome_tabelaB. " ON ".$nome_tabelaA.".".$ChaveA."=".$nome_tabelaB.".".$ChaveA.")";
//  $join2 = " INNER JOIN ".$nome_tabelaC. " ON ".$nome_tabelaA.".".$ChaveB."=".$nome_tabelaC.".".$ChaveB;

//  $sql = $select.$nomes_colunas." ".$nomes_colunas2.$from.$join1.$join2;

// echo $sql;*/
 

//  $sql = makeQuery($nome_tabelaA, $nome_tabelaB, $ChaveA, $ChaveB, $nomes_colunas);

//  $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");

//  /*$sql = "SELECT * FROM tb_Fornecedores WHERE Tipo_Fornecedor = \"Serviços\"";
//  $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");*/
 
//  echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Geometria - Domínio Fluido");

 mysqli_close($strcon2);
 echo "</tbody>";
 echo "</table>";
?>
</div> 
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
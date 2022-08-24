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
   </div><br>
<div>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 require "../funcoes/conectar.php";

 $sql = "SELECT * FROM tb_Fornecedores WHERE Tipo_Fornecedor = \"Serviços\"";
 $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
 
 echo myTable($strcon2, $sql, "Lista de Fornecedores");

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
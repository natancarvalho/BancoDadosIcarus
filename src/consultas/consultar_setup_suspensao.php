<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dados de Setup de Suspensão</title>
    <?php 

       exibirHead();
    ?>
  </head>

  <body>
  <?php 
     require "../html/navbar_home.php";
  ?>
  <div class="container-fluid">
   <h4>Dados de Setup de Suspensão</h4>
   </div>

 <div>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
require "../funcoes/conectar.php";

 $sql = "SELECT * FROM tb_setup_susp";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 

 echo myTable($strcon,$sql,"Dados de Setup de Suspensão");

?>
</div> 
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
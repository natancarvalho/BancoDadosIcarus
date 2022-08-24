<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Características do Carro</title>
    <?php 
      exibirHead();
    ?>
  </head>

<body>
<?php 
     require "../html/navbar_home.php";
  ?>
  <div class="container-fluid">
   <h4>Características do Carro</h4>
   </div>

<div> 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 require "../funcoes/conectar.php";
 require "../html/filtros.php";

 $filtros = filtroCaracteristicasCarro();
 echo $filtros;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $caracteristicasCarro = $_POST['caracteristicasCarro'];

  if ($caracteristicasCarro == "Geometria"){
    $sql = "SELECT * FROM tb_geo_susp";

    $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));
    
    echo myTable($strcon, $sql, "Geometria de Suspensão");
  }
  else if ($caracteristicasCarro == "Rigidez"){
    $sql = "SELECT * FROM tb_rigidez";

    $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));
    
    echo myTable($strcon, $sql, "Rigidez");
  }

  else {
    $sql = queryCaracteristicasCarro($strcon);

    $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));
 
    echo myTable($strcon, $sql, "Características do Carro");
 
  }
 }
 else {
  $sql = queryCaracteristicasCarro($strcon);

  $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));

  echo myTable($strcon, $sql, "Características do Carro");
 }

?>
</div>
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
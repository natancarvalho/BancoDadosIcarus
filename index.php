<?php
  $caminho = $_SERVER['PHP_SELF'];
        
  session_start();      

  $ehRotaDeLogin = stripos($caminho, 'login');

  if (isset($_SESSION['usuario_logado'])) {
      header('Location: /bdicarus/src/html/home.php');
      exit();
  }
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/cropped-cropped-Logo-escudo-32x32.png" sizes="32x32" />
    <link rel="icon" href="images/cropped-cropped-Logo-escudo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/cropped-cropped-Logo-escudo-180x180.png" />
    <meta name="msapplication-TileImage" content="../../images/cropped-cropped-Logo-escudo-270x270.png" />
    <title> Banco de Dados Icarus </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php
      require "src/html/navbar_index.php";
    ?>
  </body>
</html>
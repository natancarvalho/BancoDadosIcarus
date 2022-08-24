<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Banco de Dados</title>
    <?php
      
        exibirHead();
    ?>
  </head>
  <body>
    <?php
      require "navbar_home.php";
      //$email = $_GET['usuario'];
    ?>
    <div class="jumbotron">
    <div class="container">
      <img src="../../images/cropped-Logo-Horizontal-letra-brancatransparente.png" width="1057.8" height="157">
      <!--<h4 class="display-3">Bem vindo ao nosso Banco de Dados!</h4>-->
      <p style="font-size:120%;"> Seja bem vindo ao nosso Banco de Dados! Ele foi pensado e criado como uma forma de armazenar todo o conhecimento
        adquirido pela equipe em relação aos dados de treino, configurações dos carros e também simulações feitas
        durante a fase de projetos.
      </p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Começar &raquo;</a></p>
    </div>
  </div>
  </body>
</html>
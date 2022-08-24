<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html>
<head>
      <title> Inserir Dados </title>
      <?php 
       exibirHead();
echo "</head>";

echo "<body>";

require "../html/navbar_home.php";
require "../funcoes/conectar.php";
require "../html/filtros.php";
require "exibir_js.php";

    echo "<div class=\"container-fluid\">
    <h4>Caracteríticas do Carro</h4>
    </div>";

    $filtros = filtroAlterarCaracteristicasCarro();
    echo $filtros;

    $botao = botaoInserir();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $caracteristicasCarro = $_POST['caracteristicasCarro'];
      
        if ($caracteristicasCarro == "Geometria"){
          echo $botao;
          js_alterar_geometria_suspensao();
          js_inserir_geometria_suspensao();

          $sql = "SELECT * FROM tb_geo_susp";
      
          $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));
          
          echo editMyTable($strcon, $sql, "Geometria de Suspensão");
        }
        else if ($caracteristicasCarro == "Rigidez"){
          echo $botao;
          //js_alterar_rigidez();
          js_inserir_rigidez();
          $sql = "SELECT * FROM tb_rigidez";
      
          $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));
          
          echo editMyTable($strcon, $sql, "Rigidez");
        }
        else if ($caracteristicasCarro == "CaracteristicasCarro"){
            echo "<main role=\"main\" class=\"container\">
              <div class=\"starter-template\">
                <h1>Escolha uma tabela para editar ou inserir dados</h1>
              </div>
            </main>";
            
        }
        else {
            $sql = editarTabelaGeoSusp($_POST['Cod_Geo_Susp'], $_POST['Entre_Eixos'], $_POST['Altura_Roll_Axis'], 
            $_POST['Steer_Axis_Inc_Diant'], $_POST['Steer_Axis_Inc_Tras'], 
            $_POST['Scrub_Radius_Dianteiro'], $_POST['Scrub_Radius_Tras'], $_POST['Caster_Diant'],
            $_POST['Caster_Tras'], $_POST['Alt_Estat_Diant'], $_POST['Alt_Estat_Tras'], 
            $_POST['Dist_Long_CG_Diant'], $_POST['Dist_Long_CG_Tras'], $_POST['Mot_Ratio_Diant'], 
            $_POST['Mot_Ratio_Tras'], $_POST['Alt_Roll_Center_Tras'], $_POST['Alt_Roll_Center_Diant'],
            $_POST['Altura_CG'], $_POST['Distancia_CG_Roll_Axis'], $_POST['Bitola_Media'], 
            $_POST['Bitola_Diant'], $_POST['Bitola_Tras']);
            
            echo $sql;
    
            $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));   
            echo "<meta http-equiv='refresh' content='0'>";
        }
        
    }
    else {
        echo "<main role=\"main\" class=\"container\">
              <div class=\"starter-template\">
                <h1>Escolha uma tabela para editar ou inserir dados</h1>
              </div>
            </main>";
    }   
?>
</div>
<div class="container-fluid">
<p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
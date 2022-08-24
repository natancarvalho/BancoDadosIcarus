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
require "exibir_js.php";

    echo "<div class=\"container-fluid\">
    <h4>Dados de Setup de Suspensão</h4>
    </div>";

    $sql = "SELECT * FROM tb_setup_susp";

    $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

    echo "<div class=\"col col-xs-6 text-left\">
            <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Insert\">
                <button class=\"btn btn-sm btn-icarus\" data-title=\"Inserir\" data-toggle=\"modal\" data-target=\"#insert\">Inserir Dados
                </button>
            </p>
          </div>";
    
    echo editMyTable($strcon, $sql, "Dados de Setup de Suspensão");
       
    js_alterar_setup_susp();
    js_inserir_setup_susp();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //echo $_POST['Cod_Temperaturas'];
        //echo $_POST['Temp_Ambiente'];
        //echo $_POST['Temp_Pista']."<br>";

        //$cod = $_POST['Cod_Temperaturas'];
        //$amb = $_POST['Temp_Ambiente'];
        //$pis = $_POST['Temp_Pista'];
        
    
        /*$sql = "UPDATE dados_treino_setup.tb_temperaturas SET 
                Temp_Ambiente = '$amb', 
                Temp_Pista = '$pis'
                WHERE (Cod_Temperaturas = '$cod')";*/

        $sql = editarTabelaSetupSusp($_POST['Cod_Setup_Susp'], $_POST['Modelo_Carro'], $_POST['Data_Treino'], 
                            $_POST['Massa_Com_Piloto'], $_POST['Rigidez_ARB'], $_POST['Ride_Rate_Diant'],
                            $_POST['Ride_Rate_Tras'], $_POST['Kit_Aerodinamico'], $_POST['Camber'],
                            $_POST['Toe']);
        echo $sql;

        $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");   
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>
</div>
<div class="container-fluid">
<p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
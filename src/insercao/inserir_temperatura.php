<?php 
require "../funcoes/funcoes.php";
require "../html/navbar_home.php";
require "../funcoes/conectar.php";
//require "../exibir_js.php";

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

        $sql = inserirTemperatura($_POST['Cod_Temperaturas'], $_POST['Temp_Ambiente'], $_POST['Temp_Pista']);
        //echo $sql;

        $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");   
        echo "<meta http-equiv=\"refresh\" content=\"0; url='../html/alterar_temperatura.php'\">";
    }
?>
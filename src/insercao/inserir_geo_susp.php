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

        $sql = inserirGeoSusp($_POST['Cod_Geo_Susp'], $_POST['Entre_Eixos'], $_POST['Altura_Roll_Axis'], 
        $_POST['Steer_Axis_Inc_Diant'], $_POST['Steer_Axis_Inc_Tras'], 
        $_POST['Scrub_Radius_Dianteiro'], $_POST['Scrub_Radius_Tras'], $_POST['Caster_Diant'],
        $_POST['Caster_Tras'], $_POST['Alt_Estat_Diant'], $_POST['Alt_Estat_Tras'], 
        $_POST['Dist_Long_CG_Diant'], $_POST['Dist_Long_CG_Tras'], $_POST['Mot_Ratio_Diant'], 
        $_POST['Mot_Ratio_Tras'], $_POST['Alt_Roll_Center_Tras'], $_POST['Alt_Roll_Center_Diant'],
        $_POST['Altura_CG'], $_POST['Distancia_CG_Roll_Axis'], $_POST['Bitola_Media'], 
        $_POST['Bitola_Diant'], $_POST['Bitola_Tras']);

        echo $sql;

        $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");   
        echo "<meta http-equiv=\"refresh\" content=\"0; url='../html/alterar_fornecedores.php'\">";
    }
?>
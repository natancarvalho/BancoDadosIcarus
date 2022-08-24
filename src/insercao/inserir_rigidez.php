<?php 
require "../funcoes/funcoes.php";
require "../html/navbar_home.php";
require "../funcoes/conectar.php";
//require "../exibir_js.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $sql = inserirRigidez($_POST['Cod_Rigidez'], $_POST['Gradiente_Rolagem'], $_POST['Massa_Sem_Piloto'], 
        $_POST['Massa_Nao_Suspensa'], $_POST['Massa_Nao_Susp_Diant'], $_POST['Massa_Nao_Susp_Tras'], 
        $_POST['Massa_DE'], $_POST['Massa_DD'], $_POST['Mass_TE'], $_POST['Massa_TD'], $_POST['K_Mola_DD'], 
        $_POST['K_Mola_DE'], $_POST['K_Mola_TD'], $_POST['K_Mola_TE'], $_POST['Perc_Peso_DD'], 
        $_POST['Perc_Peso_DE'], $_POST['Perc_Peso_TD'], $_POST['Perc_Peso_TE'], $_POST['Perc_Peso_Diant'], 
        $_POST['Perc_Peso_Tras'], $_POST['Freq_Ress_Diant'], $_POST['Freq_Ress_Tras'], $_POST['Transf_Lat_Diant'], 
        $_POST['Transf_Lat_Tras'], $_POST['Rigidez_Molas_Tras'], $_POST['Transf_Lat_Carga_Total'], 
        $_POST['Rigidez_Mola_Diant']);

        echo $sql;

        $resultado = mysqli_query($strcon,$sql) or die(printf("Error: %s\n", mysqli_error($strcon)));   
        echo "<meta http-equiv=\"refresh\" content=\"0; url='../html/alterar_caracteristicas_carro.php'\">";
    }
?>
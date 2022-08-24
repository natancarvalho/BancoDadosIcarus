<?php 
require "../funcoes/funcoes.php";
require "../html/navbar_home.php";
require "../funcoes/conectar.php";
//require "../exibir_js.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql = inserirFornecedoresServicos($_POST['Codigo'], $_POST['Empresa'], $_POST['Email'], 
        $_POST['Situacao_Relacionamento'], $_POST['Comentarios'], $_POST['Comentarios2'], 
        $_POST['Responsavel'], $_POST['Tipo_Fornecedor']);

        echo $sql;

        $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");   
        echo "<meta http-equiv=\"refresh\" content=\"0; url='../html/alterar_caracteristicas_carro.php'\">";
    }
?>
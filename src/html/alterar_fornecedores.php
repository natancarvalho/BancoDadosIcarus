<?php
  require "../funcoes/funcoes.php";
  verificarSessao ();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Inserir dados de F ornecedores</title>
    <?php 
       exibirHead();
echo "</head>";

echo "<body>";

require "../html/navbar_home.php";
require "../funcoes/conectar.php";
require "../html/filtros.php";
require "exibir_js.php";

    echo "<div class=\"container-fluid\">
    <h4>Lista de Fornecedores</h4>
    </div>";

    $filtros = filtroAlterarfornecedores();
    echo $filtros;

    $botao = botaoInserir();
    //js_fornecedoresServicos();
    //js_fornecedoresMaterial();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fornecedores = $_POST['fornecedores'];
      
        if ($fornecedores == "Material"){
          echo $botao;
          js_fornecedoresMaterial();
          js_inserir_fornecedoresMaterial();

          $sql = $sql = queryFornecedoresMateriais ($strcon2);;
      
          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo editMyTable($strcon2, $sql, "Lista de Fornecedores de Material");
        }
        else if ($fornecedores == "Serviços"){
          echo $botao;
          js_fornecedoresServicos();
          js_inserir_fornecedoresServicos();
          $sql = "SELECT * FROM tb_Fornecedores WHERE Tipo_Fornecedor = 'Serviços'";
      
          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo editMyTable($strcon2, $sql, "Lista de Fornecedores de Serviços");
        }
        else if ($fornecedores == "fornecedores"){
            echo "<main role=\"main\" class=\"container\">
              <div class=\"starter-template\">
                <h1>Escolha uma tabela para editar ou inserir dados</h1>
              </div>
            </main>";
            
        }
        else {
            $sql = editarFornecedoresServicos($_POST['Codigo'], $_POST['Empresa'], $_POST['Email'], 
            $_POST['Situacao_Relacionamento'], $_POST['Comentarios'], $_POST['Comentarios2'], 
            $_POST['Responsavel'], $_POST['Tipo_Fornecedor']);
            
            echo $sql;
    
            $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");   
            echo "<meta http-equiv='refresh' content='0'>";
        }
        
    }
    else {
        echo "<main role=\"main\" class=\"container\">
              <div class=\"starter-template\">
                <h1>Escolha uma tabela para editar ou inserir dados</h1>
              </div>
            </main>";}
    
    ?>
    <div class="container-fluid">
      <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
    </div>
  </body>
</html>
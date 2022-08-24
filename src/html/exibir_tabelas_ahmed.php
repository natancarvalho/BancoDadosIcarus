 <div>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
  require "../funcoes/conectar.php";
  //require "../funcoes/funcoes.php"; 


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $geometria = $_POST['geometria'];
    $malha = $_POST['malha'];
    $solver_resultados = $_POST['solver_resultados'];

    //echo $geometria."<br>";
    //echo $malha."<br>";

    if ($geometria != "Geometria"){
      switch ($geometria) {
        case 'Dominio':
          $sql = "SELECT * FROM tb_Dominio_Fluido";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Geometria - Domínio Fluido");
          break;
        
        case 'Influencia1':
          $sql = "SELECT * FROM tb_Influencia1_Carbox1";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Geometria - Influência 1 - Carbox 1 (mm)");
          break;

        case 'Influencia2':
          $sql = "SELECT * FROM tb_Influencia2_Carbox2";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Geometria - Influência 2 - Carbox 2 ou Wakebox(mm)");
          break;

        case 'Influencia3':
          $sql = "SELECT * FROM tb_Influencia3";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Geometria - Influência 3 - Underbody box (mm)");
          break;

        }
      //echo "Passei aqui if 1";
    }

    else if ($malha != "Malha"){
      switch ($malha) {
        case 'MalhaGlobal':
          $sql = "SELECT * FROM tb_Malha_Global";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Malha Global");
          break;
        
        case 'Face1':
          $sql = "SELECT * FROM tb_Face_Sizing";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Face Sizing 1 - Carro");
          break;

        case 'Face2':
          $sql = "SELECT * FROM tb_Face_Sizing2";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Face Sizing 2 - Rodas");
          break;

        case 'Inflation1':
          $sql = "SELECT * FROM tb_Inflation1";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Inflation 1 - Carro");
          break;

        case 'Inflation1':
          $sql = "SELECT * FROM tb_Inflation1";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Inflation 1 - Carro");
          break;

        case 'Inflation2':
          $sql = "SELECT * FROM tb_Inflation2";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Inflation 2 - Solo");
          break;

        case 'Body1':
          $sql = "SELECT * FROM tb_Body_Sizing1";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Body Sizing 1 - Carbox 1");
          break;

        case 'Body2':
          $sql = "SELECT * FROM tb_Body_Sizing2";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Body Sizing 2 - Carbox 2");
          break;

        case 'Body3':
          $sql = "SELECT * FROM tb_Body_Sizing3";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Body sizing 3 - Underbodybox");
          break;
      
        case 'Qualidade':
          $sql = "SELECT * FROM tb_Qualidade_Estatisticas";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Malha - Qualidade e Estatísticas");
          break;

        }
      //echo "Passei aqui if 2";
    }

    else if ($solver_resultados != "Solver e Resultados"){
      switch ($solver_resultados) {
        case 'SetupFluent':
          $sql = "SELECT * FROM tb_Setup_Fluent";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Solver e Resultados - Setup do Fluent");
          break;
        
        case 'Solucao':
          $sql = "SELECT * FROM tb_Solucao";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Solver e Resultados - Solução");
          break;

        case 'Resultados':
          $sql = "SELECT * FROM tb_Resultados";

          $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
          
          echo myTable($strcon2, $sql, "Simulações de Ahmed Body - Solver e Resultados - Resultados");
          break;
        }
      //echo "Passei aqui if 2";
    }
  }   
  
  else {
    echo "<main role=\"main\" class=\"container\">
          <div class=\"starter-template\">
            <h1>Escolha uma tabela acima</h1>
          </div>
        </main>";
  }


 
 /*
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $Codigo = $registro['Codigo'];
   $Empresa = $registro['Empresa'];  
   $Telefone = $registro['Telefone'];
   $Email = $registro['Email'];
   $Situacao_Relacionamento = $registro['Situacao_Relacionamento'];
   $Comentarios = $registro['Comentarios'];
   $Comentarios2 = $registro['Comentarios2'];
   $Responsavel = $registro['Responsavel'];
   $Tipo_Fornecedor = $registro['Tipo_Fornecedor'];
   echo "<tr>";
   echo "<td scope=\"row\">".$Codigo."</td>";
   echo "<td>".$Empresa."</td>";
   echo "<td>".$Telefone."</td>";
   echo "<td>".$Email."</td>";
   echo "<td>".$Situacao_Relacionamento."</td>";
   echo "<td>".$Comentarios."</td>";
   echo "<td>".$Comentarios2."</td>";
   echo "<td>".$Responsavel."</td>";
   echo "<td>".$Tipo_Fornecedor."</td>";
   echo "</tr>";
 }
 mysqli_close($strcon2);
 echo "</tbody>";
 echo "</table>";
?>*/


  
?>
</div> 
<!--<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>-->

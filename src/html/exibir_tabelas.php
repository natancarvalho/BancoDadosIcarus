 <!-- Criando tabela e cabeçalho de dados: 
 <div class="container-fluid">
 <div class = "table-responsive">
 <table class="table table-bordered table-sm">
 <caption>Lista de Fornecedores</caption>
 <thead class="thead-dark">
 <tr>
 <th scope="col">Código</th>
 <th scope="col">Empresa</th>
 <th scope="col">Telefone</th>
 <th scope="col">Email</th>
 <th scope="col">Situação do Relacionamento</th>
 <th scope="col">Comentários 1</th>
 <th scope="col">Comentários 2</th>
 <th scope="col">Responsável</th>
 <th scope="col">Tipo de Fornecedor</th>
 </tr>
</thead>
</tbody>
</div>
 </div>-->
<div>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
  require "../funcoes/conectar.php";
  //require "../funcoes/funcoes.php";

  $responsavel = $_POST['responsavel'];
  $situacao = $_POST['situacao'];
  $tipo_fornecedor = $_POST['tipo_fornecedor'];

  //echo $responsavel."<br>";
  //echo $tipo_fornecedor."<br>";

  if ($responsavel != "Responsável"){
    $sql = queryFiltro ("tb_Fornecedores", "Responsavel", $responsavel);
    //$resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
    echo myTable($strcon2, $sql,"Lista de Fornecedores");
    //echo "Passei aqui if 1";
  }

  else if ($situacao != "Situação do Relacionamento"){
    $sql2 = queryFiltro ("tb_Fornecedores", "Situacao_Relacionamento", $situacao);
    $resultado = mysqli_query($strcon2,$sql2) or die("Erro ao retornar dados");
    echo myTable($strcon2, $sql2,"Lista de Fornecedores");
    //echo "Passei aqui if 2";
  }

  else if ($tipo_fornecedor != "Todos"){
    switch ($tipo_fornecedor) {
      case 'Material':
        $nome_tabelaA = "tb_Fornecedores";
        $nome_tabelaB = "tb_Fornecedor_Material";
        $ChaveA = "Codigo";
        $ChaveB = "Codigo";

        $nomes_colunas = get_col_names($strcon2,"tb_Fornecedor_Material");

        $sql = makeQuery($nome_tabelaA, $nome_tabelaB, $ChaveA, $ChaveB, $nomes_colunas);

        $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
        
        echo myTable($strcon2, $sql, "Lista de Fornecedores");
        break;
      
      case 'Serviços':
        $sql3 = queryFiltro ("tb_Fornecedores", "Tipo_Fornecedor", $tipo_fornecedor);
        $resultado = mysqli_query($strcon2,$sql3) or die("Erro ao retornar dados");
        echo myTable($strcon2, $sql3,"Lista de Fornecedores");
        break;
      }
    //echo "Passei aqui if 3";
  }

  else{
    $sql4 = "SELECT * FROM tb_Fornecedores";
    $resultado = mysqli_query($strcon2,$sql4) or die("Erro ao retornar dados");
    echo myTable($strcon2, $sql4,"Lista de Fornecedores");
    //echo "Passei aqui else";
  
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
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title> Banco de Dados Icarus </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
<h3>Pesquisando Dados</h3><br>
</div>
 <div id="container">

<form name="Cadastro" action="pesquisa-resultado.php" method="POST">
<label>Selecione o tipo de dados:</label>
<select name="Tipo_Dados">
  <option value="tb_setup_susp">Setup de Suspensão</option>
  <option value="tb_temperaturas">Temperaturas</option>
  <option value="tb_caracteristica_carro">Caracteristicas do Carro</option>
  <option value="tb_fornecedores">Fornecedores</option>
</select><br>
<button class="botao">Enviar</button>
</form>
</div> 
<div> 
<p><a class = "botao botao-block" href="index.php">Voltar</a></p>
</div> 
</body>
</html>
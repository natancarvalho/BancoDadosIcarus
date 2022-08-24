<!DOCTYPE html>
<html>
<head>
<title> Banco de Dados Icarus </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div>
<h3>Inserir Dados</h3><br>
</div>
 <div id="container">

<form name="Cadastro" action="inserir_resultado.php" method="POST">
<label>Selecione o tipo de dados:</label>
<select name="Tipo_Dados">
  <option value="tb_setup_susp">Setup de Suspensão</option>
  <option value="tb_temperaturas">Temperaturas</option>
  <option value="tb_caracteristica_carro">Caracteristicas do Carro</option>
</select><br>
<button class="botao">Enviar</button>
</form>
</div> 
<div> 
<p><a class = "botao botao-block" href="index.php">Voltar</a></p>
</div> 
</body>
</html>
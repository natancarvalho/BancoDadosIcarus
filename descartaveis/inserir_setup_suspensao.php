<!DOCTYPE html>
<html>
<head>
      <title> Inserir Dados </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
      <h1>Inserir Dados de Temperatura</h1>
      <div id = "container">
      <form method="POST" action="funcao2.php">
      <label>Modelo do Carro:</label><input type="text" name="Modelo_Carro" id="Modelo_Carro"><br>    
      <label>Data do Treino:</label><input type="text" name="Data_Treino" id="Data_Treino"><br>
      <label>Massa do Carro com Piloto:</label><input type="text" name="Massa_Com_Piloto" id="Massa_Com_Piloto"><br>
      <label>Rigidez ARB:</label><input type="text" name="Rigidez_ARB" id="Rigidez_ARB"><br>
      <label>Ride Rate Dianteiro:</label><input type="text" name="Ride_Rate_Diant" id="Ride_Rate_Diant"><br>
      <label>Ride Rate Traseiro:</label><input type="text" name="Ride_Rate_Tras" id="Ride_Rate_Tras"><br>
      <label>Kit Aerodinamico:</label><input type="text" name="Kit_Aerodinamico" id="Kit_Aerodinamico"><br>
      <label>Camber:</label><input type="text" name="Camber" id="Camber"><br>
      <label>Toe:</label><input type="text" name="Toe" id="Toe"><br>
      <input type="submit" value="Inserir" id="inserir" name="inserir">
      </form>
</div>
<p><a class = "botao botao-block" href="index.php">Voltar</a></p>
</body>
</html>
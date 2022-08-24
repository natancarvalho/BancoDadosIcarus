<?php
require "funcoes.php";

$Modelo_Carro = $_POST['Modelo_Carro'];
$Data_Treino = $_POST['Data_Treino'];
$Massa_Com_Piloto = $_POST['Massa_Com_Piloto'];
$Rigidez_ARB = $_POST['Rigidez_ARB'];
$Ride_Rate_Diant = $_POST['Ride_Rate_Diant'];
$Ride_Rate_Tras = $_POST['Ride_Rate_Diant'];
$Kit_Aerodinamico = $_POST['Kit_Aerodinamico'];
$Camber = $_POST['Camber'];
$Toe = $_POST['Toe'];

$servername = "34.95.209.115";
$database = "dados_treino_setup";
$username = "root";
$password = "C@rvalhoBD";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully\n";

//$codigo_setup =  new Funcoes($Modelo_Carro);
//   $codigo_setup->gerarCodigoSetup($Modelo_Carro);
 
$sql = "INSERT INTO `dados_treino_setup`.`tb_setup_susp` (`Cod_Setup_Susp`, `Modelo_Carro`, `Data_Treino`, 
                                                        `Massa_Com_Piloto`, `Rigidez_ARB`, `Ride_Rate_Diant`,
                                                         `Ride_Rate_Tras`, `Kit_Aerodinamico`, `Camber`, `Toe`) 
        VALUES ('STSUSF1902', '$Modelo_Carro', '$Data_Treino', '$Massa_Com_Piloto', '$Rigidez_ARB', 
                '$Ride_Rate_Diant', '$Ride_Rate_Tras', '$Kit_Aerodinamico', '$Camber', '$Toe');
";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
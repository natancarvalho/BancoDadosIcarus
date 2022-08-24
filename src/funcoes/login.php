<?php

require "funcoes.php";
require "../funcoes/conectar.php";

$email = $_POST['email'];
$password = $_POST['password'];

//echo $password."\n";
//echo $email."\n";

$passwordHashed = passwordHash ($password);

//$sql = "SELECT * FROM tb_dados_usuarios WHERE email = \"$email\" AND senha = \"$passwordHashed\"";

//echo $sql;

validarUsuario ($email, $passwordHashed, $strcon3);

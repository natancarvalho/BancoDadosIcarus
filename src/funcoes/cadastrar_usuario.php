<?php

require "funcoes.php";
require "../funcoes/conectar.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$area = $_POST['area'];
$microarea = $_POST['microarea'];
$senha = passwordHash($_POST['senha']);

$verificarUsuario = usuarioExiste ($email, $strcon3);

if ($verificarUsuario !=1){
    $resultado = cadastrarUsuario ($nome, $sobrenome, $email, $area, $microarea, $senha, $strcon3);

    if ($resultado == TRUE){
        echo"<script language='javascript' type='text/javascript'>
            alert('Cadastro efetuado com sucesso!');window.location
            .href='../html/formulario_cadastro.php';</script>";
            die();
    }
    else{
        echo"<script language='javascript' type='text/javascript'>
            alert('Ocorreu um erro durante o cadastro, verifique os dados!');window.location
            .href='../html/formulario_cadastro.php';</script>";
            die();
    }
}






<?php

include 'conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$endereco = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

$consulta = $cn->query("select ds_email from tbl_usuario where ds_email = '$email'");
$existe_usuario = $consulta->rowCount() == 1;

if ($existe_usuario) {
  header('location:erro1.php');
} else {
  $incluir = $cn->query("
  insert into tbl_usuario
  values(DEFAULT, '$nome', '$email', '$senha', '0', '$endereco', '$cidade', '$cep');
");
header("location:ok.php");
}

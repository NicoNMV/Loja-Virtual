<?php

include 'conexao.php';

session_start(); 

$v_usuario = $_POST['txtemail'];
$v_senha = $_POST['txtsenha'];

$cn = $connection->query("select cd_usuario, ds_email, ds_senha, ds_status, nm_usuario from tbl_usuario where ds_email = '$v_usuario' and ds_senha = '$v_senha' ");

if ($cn->rowCount() == 1) {
  $exibeusuario = $consulta->fetch(PDO::FETCH_ASSOC);
  $_SESSION['ID'] = $exibeusuario['cd_usuario'];
  header('location:index.php');
  
} else {
  header('location:erro.php');
}

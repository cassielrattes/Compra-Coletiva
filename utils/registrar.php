<?php
session_start();
include_once("./connection.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$nome = $_POST['nome'];

$sql = "INSERT INTO t_usuarios(email,senha,cep,numero,complemento,nome) values('".$email."','".$senha."','".$cep."','".$numero."','".$complemento."','".$nome."')";
$result = $db->query($sql);

if ($result != NULL) {
    header('Location: /compra_coletiva/');
}

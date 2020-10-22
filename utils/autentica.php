<?php
session_start();
include("./connection.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = 'SELECT id, nome FROM t_usuarios WHERE email="' . $email .  '" AND senha="' . $senha . '" LIMIT 1';
$result = $db->query($sql)->fetch();

if ($result != NULL) {
    $_SESSION['meu_id'] = $result['id'];
    $_SESSION['meu_nome'] = $result['nome'];
    header('Location: /compra_coletiva/home.php');
} else {
    header('Location: /compra_coletiva/?erro=Login Incorreto');
}

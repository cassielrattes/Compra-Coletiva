<?php
session_start();


$id_usuario = $_POST['id_usuario'];
$id_produto = $_POST['id_produto'];
$quantidade = $_POST['quantidade'];

$compara = $_SESSION['meu_id'];

if ($compara != $id_usuario) {
    echo "deu ruim";
} else {
    include_once('./connection.php');
    $pre = "INSERT INTO v_compras (id_usuario,id_produto,quantidade) values(%d,%d,%d)";
    $sql = sprintf($pre, $id_usuario, $id_produto, $quantidade);
    $result = $db->query($sql);
    header("Location: /compra_coletiva/home.php");
}


<?php   
include_once("./connection.php");

$nome = $_POST['nome'];
$precocoletivo = $_POST['precocoletivo'];
$qtdecoletiva = $_POST['qtdecoletiva'];
$preco = $_POST['preco'];


if (isset($_FILES['foto'])) {
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    $foto = basename($_FILES["foto"]["name"]);
    $pre = 'INSERT INTO t_produtos(nome,foto,preco,precocoletivo,qtdecoletiva) values("%s","%s",%f,%f,%d)';
    $sql = sprintf($pre, $nome, $foto, $preco, $precocoletivo,$qtdecoletiva);
    $result = $db->query($sql);
    $_SESSION['deu_bom'] = true;
    header('Location: /compra_coletiva/home.php');

}   

?>
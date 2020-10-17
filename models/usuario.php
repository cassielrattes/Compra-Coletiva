<?php
include('./models/produto.php');

$p1 = new Produto();
$p1->setNome('aloha');
$p1->setPreco(56);


$listaProdutos = array($p1);

?>

<ul>
    <?php foreach ($listaProdutos as $item) { ?>
        <li><?= $item->getNome(); ?></li>
    <?php } ?>

</ul>
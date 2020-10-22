<?php
include("./header.php");
include('./models/produto.php');
include('./connection.php');

$listaProdutos = $db->query("SELECT * FROM t_produtos")->fetchAll(PDO::FETCH_CLASS, 'Produto');

?>

<div class="row ">
    <?php foreach ($listaProdutos as $item) { ?>
        <div class="card col-md-4">
            <?php if (isset($_SESSION['meu_nome'])) ?> <h1>Olá <?= $_SESSION['meu_nome'] ?>,</h1>
            <img class="card-img-top" src="<?= $item->getFoto(); ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $item->getNome(); ?></h5>
                <p class="card-text">Preço: <span>R$</span><?= $item->getPreco(); ?></p>
                <form action="./utils/comprar.php" method="post">
                    <input type="hidden" name="id_produto" value="<?= $item->getId(); ?>">
                    <input type="hidden" name="id_usuario" value="<?= $_SESSION['meu_id']; ?>">
                    <button type="submit" class="btn btn-primary">Colocar no Carrinho</button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>




<?php include("./footer.php"); ?>
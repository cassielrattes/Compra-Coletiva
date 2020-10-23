<?php
include("./partials/header.php");
include('./models/produto.php');
include('./utils/connection.php');

if (!isset($_SESSION['meu_id'])) {
    header("Location: /compra_coletiva/");
}

$listaProdutos = $db->query("SELECT * FROM t_produtos")->fetchAll(PDO::FETCH_CLASS, 'Produto');
?>

<div class="container"><?php if (isset($_SESSION['meu_nome'])) ?> <h1>Olá <?= $_SESSION['meu_nome'] ?></h1></div>

<div class="row col-md-12">

    <?php foreach ($listaProdutos as $item) { ?>
        <div class="card col-md-2">
            <img class="card-img-top" src="./images/<?= $item->getFoto(); ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $item->getNome(); ?></h5>
                <p class="card-text">Preço: <span>R$</span><?= $item->getPreco(); ?></p>
                <form action="./utils/comprar.php" method="post">
                   <div>
                    <input type="hidden" name="id_produto" value="<?= $item->getId(); ?>">
                    <input type="hidden" name="id_usuario" value="<?= $_SESSION['meu_id']; ?>">
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" id="quantidade" name="quantidade" class="form-control">
                    <button type="submit" class="btn btn-primary">Colocar no Carrinho</button>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>




<?php include("./partials/footer.php"); ?>
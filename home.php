<?php
include("./partials/header.php");
include('./models/produto.php');
include('./utils/connection.php');

if (!isset($_SESSION['meu_id'])) {
    header("Location: /compra_coletiva/");
}

$listaProdutos = $db->query("SELECT * FROM t_produtos")->fetchAll(PDO::FETCH_CLASS, 'Produto');

$sql = "
select id_usuario, id_produto, sum(quantidade) as soma, t_produtos.nome as nome_produto, t_usuarios.nome as nome_usuario, qtdecoletiva, precocoletivo, foto, preco
from v_compras 
inner join t_usuarios on v_compras.id_usuario = t_usuarios.id
inner join t_produtos on v_compras.id_produto = t_produtos.id
group by t_produtos.id 
having soma >= qtdecoletiva;
";

$result_per_offer = $db->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Produto');
?>



<div class="container">
<div class="row">

    <?php foreach ($result_per_offer as $item) { ?>
            <div class="card col-md-3 mt-5 ml-5">
                <img class="offer" src="./assets/offer.png" style="position:absolute; width:120px; right:-105px; top:-20px; z-index:100">
                <img class="card-img-top mt-2" src="./images/<?= $item->getFoto(); ?>" style="width:120px; margin:0 auto;">
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

    <div class="row">
    <?php foreach ($listaProdutos as $item) { ?>
        <div class="card col-md-3 mt-5 ml-5">
            <img class="card-img-top mt-2" src="./images/<?= $item->getFoto(); ?>" style="width:120px; margin:0 auto;">
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

    
</div>




<?php include("./partials/footer.php"); ?>
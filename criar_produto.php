<?php include("./partials/header.php"); 

if(isset($_SESSION['deu_bom'])){
    echo "Deu bom";
}

if (!isset($_SESSION['meu_id'])) {
    header("Location: /compra_coletiva/");
}
?>



<form method="POST" action="./utils/cria-produto.php" enctype="multipart/form-data">
    <div class="box-lr">
        <h1>Criar Produto</h1>
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome"  />
        <label for="foto">Foto do Produto:</label>
        <input type="file" id="foto" name="foto"  />
        <label for="preco">Preço do Produto:</label>
        <input type="text" id="preco" name="preco"  />
        <label for="qtdecoletiva">Quantidade Coletiva do Produto:</label>
        <input type="text" id="qtdecoletiva" name="qtdecoletiva" >
        <label for="precocoletivo">Preço Coletivo do Produto:</label>
        <input type="text" id="precocoletivo" name="precocoletivo" >
        <button type="submit">Enviar</button>
    </div>

</form>


<?php include("./partials/footer.php"); ?>
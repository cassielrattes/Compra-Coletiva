<?php include("./partials/header.php"); 
if (!isset($_SESSION['meu_id'])) {
    header("Location: /compra_coletiva/");
}
?>



<form method="POST" action="./utils/registrar.php">
    <div class="box-lr">
        <h1>Criar Produto</h1>
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required />
        <label for="foto">Foto do Produto:</label>
        <input type="file" id="foto" name="foto" required />
        <label for="preco">Preço do Produto:</label>
        <input type="number" id="preco" name="preco" required />
        <label for="qtdecoletiva">Quantidade Coletiva do Produto:</label>
        <input type="number" id="qtdecoletiva" name="qtdecoletiva" required>
        <!-- <label for="precocoletivo">Preço Coletivo do Produto:</label>
        <input type="number" id="precocoletivo" name="precocoletivo" required> -->
        <button type="submit">Enviar</button>
    </div>

</form>


<?php include("./partials/footer.php"); ?>
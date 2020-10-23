<?php include("./partials/header.php");
if (isset($_GET['erro'])) {
    echo "<h2>" . $_GET['erro'] . "</h2>";
}
?>

<form method="POST" action="./utils/autentica.php">
    <div class="box-lr">
        <h1>Login</h1>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Enviar</button>
    </div>

</form>


<?php include("./partials/footer.php"); ?>
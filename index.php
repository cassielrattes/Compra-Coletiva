<?php include("./header.php") ?>



<form>
    <div>
        <h1>Cadastre-se</h1>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" required>
        <label for="numero">Número da Casa:</label>
        <input type="text" id="numero" name="numero" required>
        <label for="complemento">Complemento da Casa:</label>
        <input type="text" id="complemento" name="complemento" required>
        <button type="submit">Enviar</button>
    </div>

</form>


<?php include("./footer.php") ?>
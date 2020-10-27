<?php 
include("./partials/header.php");
include('./utils/connection.php');

$id_usuario = $_SESSION["meu_id"];

$sql = "
select id_usuario, id_produto, quantidade, t_produtos.nome as nome_produto, t_usuarios.nome as nome_usuario, qtdecoletiva, precocoletivo 
from v_compras 
inner join t_usuarios on v_compras.id_usuario = t_usuarios.id
inner join t_produtos on v_compras.id_produto = t_produtos.id
where id_usuario='".$id_usuario."';
";

$result_per_id = $db->query($sql);
?>


<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th>Nome do Produto</th>
            <th>Nome do Usuário</th>
            <th>Quantidade</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result_per_id as $item) { ?>
            <tr>
                <td><?=$item["nome_produto"]?></td>
                <td><?=$item["nome_usuario"]?></td>
                <td><?=$item["quantidade"]?></td>
            <tr>
        <?php } ?>
    </tbody>

</table>

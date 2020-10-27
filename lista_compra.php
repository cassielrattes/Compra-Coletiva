<?php 
include("./partials/header.php");
include('./utils/connection.php');

$sql = "
select id_usuario, id_produto, quantidade, t_produtos.nome as nome_produto, t_usuarios.nome as nome_usuario, qtdecoletiva, precocoletivo from v_compras 
inner join t_usuarios on v_compras.id_usuario = t_usuarios.id
inner join t_produtos on v_compras.id_produto = t_produtos.id;
";

$result_join = $db->query($sql);
?>


<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th>Nome do Produto</th>
            <th>Nome do Usuário</th>
            <th>ID do Usuário</th>
            <th>ID do Produto</th>
            <th>Quantidade</th>
            <th>Quantidade do Preço Coletivo</th>
            <th>Preço Coletivo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result_join as $item) { ?>
            <tr>
                <td><?=$item["nome_produto"]?></td>
                <td><?=$item["nome_usuario"]?></td>
                <td><?=$item["id_usuario"]?></td>
                <td><?=$item["id_produto"]?></td>
                <td><?=$item["quantidade"]?></td>
                <td><?=$item["qtdecoletiva"]?></td>
                <td><?=$item["precocoletivo"]?></td>
            <tr>
        <?php } ?>
    </tbody>

</table>

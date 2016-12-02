<?php
    include("./botaoCadastrar.php");
    include("/controller/VendaController.php");
    if(!empty($_POST))
    {
        $controller = new VendaController();
        $controller->visualizarAction();
    }
?>
<a href="<?php botaoCadastrar(); ?>"><button>Popular</button></a>
<table>
    <?php foreach($venda as $venda): ?>
        <tr>
            <td><?php echo $venda["idCliente"]; ?></td>
            <td><?php echo $venda["nome"]; ?></td>
            <td><?php echo $venda["cpf"]; ?></td>
            <td><?php echo $venda["email"]; ?></td>
            <td><?php echo $venda["fone"]; ?></td>
            <td><?php echo $venda["dataHora"]; ?></td>
            <td><?php echo $venda["parcelas"]; ?></td>
            <td><?php echo $venda["valorParcelas"]; ?></td>
            <td><?php echo $venda["valorTotal"]; ?></td>
            <td><?php echo $venda["checkbox"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

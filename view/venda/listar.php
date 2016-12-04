<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    include "botaoCadastrar.php";
?>
<a href="<?php echo botaoCadastrar(); ?>"><button>Popular</button></a>
<table class="table">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Fone</th>
            <th>dataHora</th>
            <th>Parcelas</th>
            <th>valorParcelas</th>
            <th>valorTotal</th>
            <th>Checkbox</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($vendas as $venda): ?>
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
        </tbody>
</table>

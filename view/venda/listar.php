<?php

    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "botaoCadastrar.php";

    include "util/Validar.php";

?>
<a href="<?php echo botaoCadastrar(); ?>"><button>Popular</button></a>
<table class="table">
    <thead>
        <tr>
            <th>Nome Venda</th>
            <th>Nome Mãe</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Fone</th>
            <th>dataHora</th>
            <th>Parcelas</th>
            <th>valorParcelas</th>
            <th>valorTotal</th>
            <th>Checkbox</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($vendas as $venda): ?>
            <tr>
                <td><?php echo $venda["nome"]; ?></td>
                <td><?php echo $venda["nomeMae"]; ?></td>
                <td><?php echo Validar::cpf($venda["cpf"]); ?></td>
                <td><?php echo $venda["email"]; ?></td>
                <td><?php echo Validar::fone($venda["fone"]); ?></td>
                <td><?php echo Validar::dateTime($venda["dataHora"]); ?></td>
                <td><?php echo $venda["parcelas"]; ?></td>
                <td><?php echo Validar::dinheiro($venda["valorParcelas"]); ?></td>
                <td><?php echo Validar::dinheiro($venda["valorTotal"]); ?></td>
                <td>
                    <input type="checkbox" <?php echo Validar::checkbox($venda["checkbox"]); ?> disabled>
                </td>
                <td>
                    <a href="?controller=venda&action=editar">Editar</a>
                </td>
                <td>
                    <a href="?controller=venda&action=destruir&idVenda=<?php echo $venda["idVenda"]; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

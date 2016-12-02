<?php
    include("/controller/ClienteController.php");
    include("./botaoCadastrar.php");
    if(!empty($_POST))
    {
        $controller = new ClienteController();
        $controller->visualizarAction();
    }
?>
<a href="<?php botaoCadastrar(); ?>"><button>Popular</button></a>
<table>
    <?php foreach($cliente as $cliente): ?>
        <tr>
            <td><?php echo $cliente["idCliente"]; ?></td>
            <td><?php echo $cliente["nomeMae"]; ?></td>
            <td><?php echo $cliente["dataNascimento"]; ?></td>
            <td><?php echo $cliente["logradouro"]; ?></td>
            <td><?php echo $cliente["cep"]; ?></td>
            <td><?php echo $cliente["bairro"]; ?></td>
            <td><?php echo $cliente["estado"]; ?></td>
            <td><?php echo $cliente["cidade"]; ?></td>
            <td><?php echo $cliente["numero"]; ?></td>
            <td><?php echo $cliente["complemento"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php
    include "controller/ClienteController.php";
    if(!empty($_POST))
    {
        $controller = new ClienteController();
        $controller->visualizarAction();
    }
?>
<a href="<?php echo botaoCadastrar(); ?>"><button>Popular</button></a>
<table>
    <thead>
        <tr>
            <td>Nome da Mãe</td>
            <td>Data de Nascimento</td>
            <td>Logradouro</td>
            <td>CEP</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>Número</td>
            <td>Complemento</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cliente as $cliente): ?>
            <tr>
                <td><?php echo $cliente["nomeMae"]; ?></td>
                <td><?php echo $cliente["dataNascimento"]; ?></td>
                <td><?php echo $cliente["logradouro"]; ?></td>
                <td><?php echo $cliente["cep"]; ?></td>
                <td><?php echo $cliente["bairro"]; ?></td>
                <td><?php echo $cliente["cidade"]; ?></td>
                <td><?php echo $cliente["estado"]; ?></td>
                <td><?php echo $cliente["numero"]; ?></td>
                <td><?php echo $cliente["complemento"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


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
            <th>Nome da Mãe</th>
            <th>Data de Nascimento</th>
            <th>Logradouro</th>
            <th>CEP</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente["nomeMae"]; ?></td>
                <td><?php echo Validar::date($cliente["dataNascimento"]); ?></td>
                <td><?php echo $cliente["logradouro"]; ?></td>
                <td><?php echo Validar::cep($cliente["cep"]); ?></td>
                <td><?php echo $cliente["bairro"]; ?></td>
                <td><?php echo $cliente["cidade"]; ?></td>
                <td><?php echo $cliente["estado"]; ?></td>
                <td><?php echo $cliente["numero"]; ?></td>
                <td><?php echo $cliente["complemento"]; ?></td>
                <td>
                    <a href="?controller=cliente&action=editar">Editar</a>
                </td>
                <td>
                    <a href="?controller=cliente&action=destruir&idCliente=<?php echo $cliente["idCliente"]; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


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







    <?php endforeach; ?>
</table>


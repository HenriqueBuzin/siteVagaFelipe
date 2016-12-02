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







    <?php endforeach; ?>
</table>

<?php
    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "controller/VendaController.php";

    // include "controller/ClienteController.php";

    $controllerVenda = new VendaController();

    // $controllerCliente = new ClienteController();

?>


<?php

    $controllerVenda->visualizarAction();

   // $controllerCliente->visualizarAction();

?>


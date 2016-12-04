<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    if((!empty(isset($_GET["controller"]))) && (!empty(isset($_GET["action"])))) {
        $controller = addslashes(filter_input(INPUT_GET, 'controller'));
        $controlClasse = ucfirst($controller) . "Controller";
        $controller = $controlClasse . ".php";
        $action = addslashes(filter_input(INPUT_GET, 'action'));
        $action = $action . "Action";
        try {
            if (!file_exists("controller/{$controller}")) {
                throw new Exception("{$controller} was not found");
                header("Location: inicio.php");
            }
            include "controller/{$controller}";
            $control = new $controlClasse;
            if (!method_exists($control, $action)) {
                header("Location: inicio.php");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }else{
        header("Location: inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Henrique Antonio Buzin Vargas">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.mask.min.js"></script>
        <script src="assets/js/index.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/datatables.min.css">
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body>

        <?php $control->$action(); ?>
    </body>
</html>



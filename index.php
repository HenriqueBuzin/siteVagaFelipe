<?php
    if((!empty(filter_input(INPUT_GET, 'controller'))) && (!empty(filter_input(INPUT_GET, 'action')))){
        $controller = addslashes(filter_input(INPUT_GET, 'controller'));
        $controller = ucfirst($controller) . "Controller";
        $action = addslashes(filter_input(INPUT_GET, 'action'));
        $action = $action . "Action";
        if (file_exists("/controller/" . $controller) && method_exists("/controller/" . $controller, $action)) {
            //
        }else{
            header("./inicio.php");
        }
    }
?>
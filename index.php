<?php
    if((!empty(isset($_GET["controller"]))) && (!empty(isset($_GET["action"]))))
    {
        $controller = addslashes(filter_input(INPUT_GET, 'controller'));
        $controller = ucfirst($controller) . "Controller.php";
        $action = addslashes(filter_input(INPUT_GET, 'action'));
        $action = $action . "Action";
        if (file_exists("/controller/" . $controller) && method_exists("/controller/" . $controller, $action)) {
            header('Location: /controller/{$controller}');
        }else{
            header('Location: ./inicio.php');
        }
    }
    else
    {
        header('Location: ./inicio.php');
    }
    echo 1;
?>
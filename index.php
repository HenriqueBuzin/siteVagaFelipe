<?php
    if((!empty(isset($_GET["controller"]))) && (!empty(isset($_GET["action"]))))
    {
        $controlClasse = addslashes(filter_input(INPUT_GET, 'controller'));
        $controlClasse = ucfirst($controller) . "Controller";
        $action = addslashes(filter_input(INPUT_GET, 'action'));
        $action = $action . "Action";
        if (file_exists("/controller/" . $controller) && method_exists("/controller/" . $controller, $action))
        {
            $control = new $controlClasse;
            $control->$action();
        }
        else
        {
            header('Location: ./inicio.php');
        }
    }
    else
    {
        header('Location: ./inicio.php');
    }
    echo 1;
?>


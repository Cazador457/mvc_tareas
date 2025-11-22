<?php
    require_once "./controller/TareasController.php";

    $controller = new TareaController();
    if(isset($_GET['action'])){
        if($_GET['action'] == 'agregar' && !empty($_POST['description'])){
            $controller->agregar($_POST['description']);
        }elseif($_GET['action'] == 'completar' && isset($_GET['id'])){
            $controller->completar($_GET['id']);
        }
    }else {
        $controller->listar();
    }
?>
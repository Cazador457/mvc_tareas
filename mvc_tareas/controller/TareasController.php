<?php
    require_once "./model/tareas.php";

    class TareaController{
        private $modelo;

        public function __cunstruc(){
            $this->modelo=new Tarea();
        }
        public function listar(){
            $tareas = $this->modelo->obtenerTareas();
            include "./vista/listar,php";
        }

        public function agregar($descripcion){
            $this->modelo->agregarTareas($descripcion);
            header("Location: index.php");
        }

        public function completar($id){
            $this->modelo->completarTareas($id);
            header("Location: index.php");
        }
    }
?>
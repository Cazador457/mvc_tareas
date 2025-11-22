<?php
    class Tarea{
        private $conn;

        public function __construct()
        {
            $this->conn=new mysqli("localhost","usrtareas","Vallhala_45","tareas_db");
        }

        public function obtenerT(){
            $result=$this->conn->query("SELECT * from tareas");
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function agregarTareas($descrpcion){
            $smt=$this->conn->prepare("INSERT INTO tareas (descrpcion)  VALUES (?)");
            $smt->bind_param("s",$descrpcion);
            $smt->execute();
        }

        public function completarTarea($id){
            $smt=$this->conn->prepare("UPDATE tareas SET completada=1 WHERE idtareas=?");
            $smt->bind_param("i",$id);
            $smt->execute(); 
        }
    }
?>
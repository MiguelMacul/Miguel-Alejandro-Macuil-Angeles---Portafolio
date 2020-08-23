<?php
    require_once "../Confic/conexion.php";
    class ClaseEntrada extends Conexion
    {
        // El constructor hereda a conexion por lo tanto conecta el objeto a la bd
        public function __construct() 
        {
            parent::__construct();
            echo "Se construyo el objeto. ";    
        }
        public function modulos(){
            $result = $this->db->query("SELECT nombre,horas FROM materia");
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function Estudiantes(){
          //   $result = $this->db->query("SELECT grupo FROM alumnos");
             $con = $this->db->query("SELECT DISTINCT grupo from alumnos ");
              $usuarios = $con->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function count($grupo){
            $con = $this->db->query("SELECT count(*) as numero,grupo from alumnos where grupo=$grupo");
            return $con;
        }
       
    }
?>
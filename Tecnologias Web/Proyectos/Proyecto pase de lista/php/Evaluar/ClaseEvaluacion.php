<?php
    require_once "../Confic/conexion.php";
     
    class ClaseEvaluacion extends conexion
    {
        // El constructor hereda a conexion por lo tanto conecta el objeto a la bd
        public function __construct() 
        {
            parent::__construct();
            echo "Se construyo el objeto. ";    
        }
        public function get_usuarios($que)
		{
			echo "Estoy consultando. ";
			$result = $this->db->query("SELECT * FROM alumnos where grupo=$que");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}

        public function grupos(){
            $con = $this->db->query("SELECT DISTINCT grupo from alumnos ");
            $usuarios = $con->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function insertar($matricula,$numeroActividad,$calificacion,$observacion){
            $con = $this->db->query("INSERT INTO calificaciones VALUES(default,$matricula,$numeroActividad,$calificacion,$observacion)");

        }
}
?>
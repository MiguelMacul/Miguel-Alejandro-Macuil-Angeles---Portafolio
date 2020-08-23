<?php
	require_once "../Confic/conexion.php";
	
	class claseUnidades extends Conexion
	{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public function __construct() 
		{
			parent::__construct();
		}
		public function insertar($id_materia,$sub_unidad,$nombre)
	    {
			$consulta="Insert into unidad values(default,'$id_materia', '$sub_unidad', '$nombre')";
			 $consulta;
			$result=$this->db->query($consulta);
			if($result)
			{
				return "Bien";
			}
			else
				return 0;
		}
		
		public function get_usuarios($materia)
		{
			$result = $this->db->query("SELECT * FROM unidad where id_materia='$materia'");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
		public function general(){
			$result = $this->db->query("SELECT * FROM unidad");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
		public function materia(){
			$result = $this->db->query("SELECT * FROM materia");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
		
		public function consultas_especificas($donde,$que)
		{
			
			$consulta = "SELECT * FROM unidad where $donde='$que'";
			
			$result = $this->db->query($consulta);
			$usuarios = $result->fetch_all(MYSQLI_ASSOC); 
			return $usuarios;
		}
		public function otro(){
			
			$result = $this->db->query("SELECT * FROM materia");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
		public function eliminar($id)
		{
			$con = "DELETE from unidad WHERE id_unidad = '$id'";
			$result = $this->db->query($con);
			if ($result)
			{
				
				return "eliminada";
			}
			else
				return 0;
		}
		  public function BuscarActualizar($id_unidad)
        {
            $consulta="SELECT * FROM unidad WHERE id_unidad ='$id_unidad'";
            $result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function Actualizar($id_unidad,$id_materia,$sub_unidad,$nombre)
        {
            $consulta="UPDATE  unidad SET  id_unidad='$id_unidad', id_materia =  '$id_materia', sub_unidad='$sub_unidad', sub_unidad='$sub_unidad' WHERE  id_unidad =  '$id_unidad'";
            $result = $this->db->query($consulta);
            if ($result)
            {
                
                return 1;
            }
            else
                return 0;
		}
		public function Filtro($dar){
			$consulta="SELECT * FROM unidad WHERE id_unidad ='$dar'";
       
            $result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
		}
	}
?>
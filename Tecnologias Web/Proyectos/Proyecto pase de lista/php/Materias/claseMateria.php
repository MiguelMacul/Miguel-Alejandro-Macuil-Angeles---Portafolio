<?php
	require_once "../Confic/conexion.php";
	
	class claseMateria extends Conexion
	{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public $rad;
		public function __construct() 
		{
			parent::__construct();
		}
		public function exa(){
			$ran=rand(1000,10000);
			$consulta="SELECT hex('$ran') resulta";
			 $result=$this->db->query($consulta);
			 $hola=mysqli_fetch_array($result); 
			 $rad=$this->rad=$hola['resulta'];
		}
		public function insertar($modulo,$horas){
 			$obj=new claseMateria;
 			$obj->exa();
			 $consulta="INSERT INTO materia VALUES('$obj->rad','$modulo','$horas')";
			 $result=$this->db->query($consulta);
			 if($result)
            {
                return "Exito";
            }
            else
                return 0;
		}
		public function get_usuarios()
		{
			$result = $this->db->query("SELECT * FROM materia");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
		
		public function eliminar($id)
		{
			$con = "DELETE from materia WHERE id_materia = '$id'";
			$result = $this->db->query($con);
			if ($result)
			{
				return "Fue eliminado";
			}
			else
				return 0;
		}
		
		 public function consultas_especificas($donde,$que)
        {
            $consulta="SELECT * FROM materia where $donde='$que'";
            $result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }   
        public function BuscarActualizar($id)
        {
            $consulta="SELECT * FROM materia WHERE id_materia='$id'";
            $result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function Actualizar($id_materia,$nombre,$horas)
        {
            $consulta="UPDATE  materia SET  id_materia='$id_materia', nombre =  '$nombre', horas='$horas' WHERE id_materia='$id_materia'";
            $result = $this->db->query($consulta);
            if ($result)
            {

                
                return "Bien";
            }
            else
                return 0;
        }
    }
?>

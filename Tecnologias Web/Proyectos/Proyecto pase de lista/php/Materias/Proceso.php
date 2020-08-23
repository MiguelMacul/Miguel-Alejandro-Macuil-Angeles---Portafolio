<?php
	require_once "../Confic/conexion.php";
	
	class proceso extends conexion{
		public $rad;
		public function exa(){
			$ran=rand(1000,10000);
			$consulta="SELECT hex('$ran') resulta";
			 $result=$this->db->query($consulta);
			 $hola=mysqli_fetch_array($result); 
			 $rad=$this->rad=$hola['resulta'];
		}
		public function insertar($modulo,$horas){
 			$obj=new proceso;
 			$obj->exa();
			echo $consulta="INSERT INTO materia VALUES('$obj->rad','$modulo','$horas')";
			 $result=$this->db->query($consulta);
			 if($result)
            {
                echo "El alumno fue registrado con extoso. ";
                return 1;
            }
            else
                return 0;
		}
		public function consultar($codigo){
			$consulta="SELECT id_materia from materia where id_materia='$codigo'";
			$resultado=$this->db->query($consulta);
			$hola=mysqli_fetch_array($resultado);
			if($hola['id_materia']==$codigo){
				 header("Location:alta.php");
			}else{
				 header("Locaion:grupo.php");
			}
		}
	}
?>
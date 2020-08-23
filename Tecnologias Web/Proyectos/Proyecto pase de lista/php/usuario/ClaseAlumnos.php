<?php
    require_once "conexion.php";
    class ClaseAlumnos extends Conexion
    {
        // El constructor hereda a conexion por lo tanto conecta el objeto a la bd
        public function __construct() 
        {
            parent::__construct();
            echo "Se construyo el objeto. ";    
        }
        public function insertar($matricula,$apellidoP,$apellidoM,$nombre,$grupo,$genero)
        {
            $consulta="Insert into alumnos values('$matricula','$apellidoP','$apellidoM','$nombre','$grupo','$genero')";
            echo $consulta;
            $result=$this->db->query($consulta);
            if($result)
            {
                echo "El alumno fue registrado con 鸩to. ";
                header("Location:qr.php?matricula='$matricula'");
                return 1;
            }
            else
                return 0;
        }
        public function insertar2($matricula,$apellidoP,$apellidoM,$nombre,$grupo,$genero)
        {
            $validar="SELECT * From alumnos where matricula='$matricula'";
            $mostrar=$this->db->query($validar);
            $esto=$mostrar->fetch_all(MYSQLI_ASSOC);
            foreach ($esto as $algo){
                $resutado=$algo['matricula'];
            }
            if($matricula==$resutado){
                $salida="Existe";
                return $salida;
            }else{
                $Qr=new claseQr;
                $Qr->generar($matricula);
                $consulta="Insert into alumnos values('$matricula','$apellidoP','$apellidoM','$nombre','$grupo','$genero')";
                    echo $consulta;
                $result=$this->db->query($consulta);
                if($result){
                    echo "El alumno fue registrado con 鸩to. ";
                    header("Location:enlace.php?nombre=".$nombre);     
                    }  
                }
        }        
        public function get_usuarios()
        {
            echo "Estoy consultando. ";
            $result = $this->db->query("SELECT * FROM alumnos");
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
         
            public function consultas_especificas($donde,$que)
        {
            echo "Estoy consultando. ";
            $consulta="SELECT * FROM alumnos where $donde='$que'";
            echo $consulta;
            $result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }   
        public function eliminar($id)
        {
            $con = "delete from alumnos WHERE nombre = '$id'";
            echo $con.". ";
            $result = $this->db->query($con);
            if ($result)
            {
                echo "El alumno fue eliminado con 鸩to. ";
                return 1;
            }
            else
                return 0;
        }
     public function BuscarActualizar($matricula)
        {
            $consulta="SELECT * FROM alumnos WHERE matricula='$matricula'";
            echo $consulta;
            $result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function login($User,$rola)
        {
                $consulta=$this->db->query("SELECT nombre,matricula from alumnos where nombre='$User' and matricula='$rola'");
                $result=mysqli_fetch_array($consulta);
                if($result['nombre']==$User && $result['matricula']==$rola){
                     header("Location:php/usuario/Entrada.php");
                }else{
                    $cadena="EL usuario esta mal";
                   return $cadena;
                   // include("Locaion:java.js");
                }
        }
        public function Actualizar($matricula,$apellidoP,$apellidoM,$nombre,$grupo,$genero)
        {
            $consulta="UPDATE  alumnos SET   matricula = '$matricula', apellidoP = '$apellidoP', apellidoM='$apellidoM', nombre='$nombre', grupo='$grupo', genero='$genero' WHERE  matricula = '$matricula'";
            echo $consulta;
            $result = $this->db->query($consulta);
            if ($result)
            {
                echo "El alumno fue modificado con éxito. ";
                return 1;
            }
            else
                return 0;
        }
    
}
?>

<?php 
require_once "claseMateria.php";
$abre=new claseMateria;
$mensaje1="";
$mensaje2="";
$bandera="";
if (isset($_POST['Guardar']))
  {
     $modul=$_POST['modulo'];
     $horas1=$_POST['horas'];
     if ($_POST['modulo'] && $_POST['horas']) {
        $Respuesta=$abre->insertar($modul,$horas1);
        if($Respuesta=="Exito"){
            $bandera="no";
            $mensaje1="Excelente";
            $mensaje2="El registro de la Materia  ".$_POST['modulo']." fue registrado con exito";
        }
     }
     else{
        $bandera="no";
        $mensaje1="Error algo a salido mal";
        $mensaje2="Verifica que los datos sean los especificados";
     }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pase de lista</title>
  <link rel="shortcut icon" href="../../img/logo.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/maqueta.css">
  <script type="text/javascript" src="../../js/restricciones.js"></script>
</head>
<body>
<?php
if($bandera=="no"){
  ?> 
    <script type="text/javascript">
            $(document).ready(function()
          {
             $("#mostrarmodal").modal("show");
          });
       </script>
  <?php
   }
   ?>


 <div class="container">
  <div class="row">
    <div class="col-sm-10">
       <h1 class="text-right">Pase de Lista Automatizado</h1>
    </div>
    <div class="col-sm-2">
       <img src="../../img/qr.png" width="80" height="80" class="center">
    </div>
   </div>  
  <ul class="nav nav-tabs" >
     <li class="active" > 
      <a  href="../usuario/Entrada.php">Inicio</a>
     </li>
     <li><a href="#" >Alta Materias</a></li> 
     <li><a href="Baja_Materia.php">Baja Materias</a></li> 
     <li><a href="Consulta.php">Consulta de Materias</a></li> 
     <li><a href="Consulta_Especiales.php">Consulta Especifical de Materias</a></li> 
     <li><a href="Modificaciones.php">Modificacion de Materias</a></li>         
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1>Registro de Modulo</h1>
    </div> <!--home-->
    <div id="admin" class="tab-pane fade">
      <h3>Administracion </h3>
       <a href="#" class="btn btn-success" role="button">
       Materias</a>
       <div class="btn-group">
         <button type="button" class="btn btn-success">
         Alumnos</button>
         <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
         </button>
         <ul class="dropdown-menu" role="menu">
           <li><a href="#">Alta  Alumnos</a></li>
           <li><a href="ConsultaAlumnos.php">
             Consultas Alumnos</a></li>
         </ul>
       </div>
    </div><!--admin-->
    <div id="alum" class="tab-pane fade">
      <h3>Alumnos</h3>
       <a href="#" class="btn btn-success" role="button">Tradicional</a>
       <a href="#" class="btn btn-success" role="button">Insertar </a>
       <a href="Lectorqr.php" class="btn btn-success" role="button">Lector Qr</a>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  totam rem aperiam.</p>
    </div><!--alum-->
    <div id="reportes" class="tab-pane fade">
      <h3>Alumnos</h3>
       <a href="#" class="btn btn-success" role="button">Semanal</a>
        <a href="#" class="btn btn-success" role="button">Mensual</a>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
    </div><!--reportes-->
  </div><!--tab content-->
  <div class="row">
    <div class="col-sm-6">
       <form role="form" method="post" action="">
  	            <div class="form-group">

    	            <label for="Usuario">Nombre del Modulo:</label>
    	            <input type="text" class="form-control" id="Usuario" name="modulo" onkeypress="return letras(event);" required="" autofocus="" minlength="1" maxlength="50" placeholder="Nombre de la Materia: Ejemplo: Matematicas Discretas">
  	               <label for="Usuario">Cantidad de horas</label>
    	            <input type="number" class="form-control" id="Usuario" name="horas" onkeypress="return numeros(event);" required="" min="7" max="40" placeholder="Cantidad de horas de la Materia: Ejemplo: 20">
    	            <br>
                 <button type="submit" name="Guardar" class="btn btn-default">Ingresar</button>
	         </form>
     </div><!--col 6-->
    
  </div><!--row-->
   <div class="col-sm-4">
       <img src="../../img/Sin nombre.png">
     </div><!--col 6-->
  
  
</div><!--container-->



<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $mensaje1; ?></h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $mensaje2; ?></h4>
            verfique sus datos.    
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>


</body>
</html>
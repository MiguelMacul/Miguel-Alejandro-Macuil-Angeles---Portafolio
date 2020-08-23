<?php 
$bandera="";
require_once "claseMateria.php";
$abre=new claseMateria;
$mensaje1="";
$mensaje2="";
if (isset($_POST['Guardar']))
  {
     if ($_POST['Materia']) {
       $resultado=$abre->eliminar($_POST['Materia']);
       $bandera="no";
       if ($resultado=="Fue eliminado") {
          $bandera="no";
          $mensaje1="Excelente";
          $mensaje2="La materia fue eliminada con exito";
       }else{
          $mensaje1="Error algo a salido mal";
          $mensaje2="La materia no fue eliminada";
       }
     }else{
       $bandera="no";
       $mensaje1="Recomendacion";
       $mensaje2="Seleccione una Materia para concluir la operacion";
     }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pase de lista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/maqueta.css">
  <link rel="shortcut icon" href="../../img/logo.ico">
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
  <ul class="nav nav-tabs">
    <li class="active">
    <a href="../usuario/Entrada.php">Inicio</a>
    </li>
    <li><a href="AltaMateria.php">Alta de Materias</a></li>
    <li><a href="#">Baja Materias</a></li>
    <li><a href="Consulta.php">Consulta de Materias</a></li>
    <li><a href="Consulta_Especiales.php">Consulta Especifical de Materias</a></li>
    <li><a href="Modificaciones.php">Modificacion de Materias</a></li>
  </ul>
  <center>
  <h1>Eliminar materia</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="Usuario">Seleccione la Materia a eliminar</label>
           <select class="form-control" name="Materia" data-style="btn-danger">  
              <?php 
                $a = $abre->get_usuarios();
              ?>
              <?php foreach ($a as $row):?>
             <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php echo $row['nombre']."    (".$row['id_materia'].")";?>
            </option>
            <?php endforeach ?>
           </select>
          <br>
          <button type="submit" name="Guardar" class="btn btn-default">Ingresar</button>
        </form>
      </div>
      <!--col 6-->
    </div>
    <!--row-->
    <div class="col-sm-6">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--container-->












<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $mensaje1; ?></h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $mensaje2; ?> 
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>






  </body>
  </html>
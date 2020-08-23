<?php
  require_once "ClaseUnidades.php"; 
  $usuarios = new ClaseUnidades();
  $mensaje1="";
  $mensaje2="";
  $bandera="";
  if (isset($_POST['Guardar']))
  {
   
    $res = $usuarios->insertar($_POST['Materia'],$_POST['sub_unidad'],$_POST['nombre']);   
    if($res=="Bien"){
        $bandera="no";
        $mensaje1="Excelente";
        $mensaje2="El registro de la unidad fue realizado";
    }
    else{
      $bandera="no";
      $mensaje1="Error en registro";
      $mensaje2="verifique los datos ingresados";
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
  <ul class="nav nav-tabs">
    <li class="active">
    <a href="../usuario/Entrada.php">Inicio</a>
    </li>
    <li><a href="#">Alta unidad</a></li>
    <li><a href="baja.php">Baja unidad</a></li>
    <li><a href="Consulta.php">Consulta de unidad</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Alta de unidad</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="Usuario">Seleccione la Materia a eliminar</label>
           <select class="form-control" name="Materia" data-style="btn-danger">  
              <?php 
                $a = $usuarios->otro();
              ?>
              <?php foreach ($a as $row):?>
             <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php echo $row['nombre'];?>
            </option>
            <?php endforeach ?>
           </select> 
          <label for="sub_unidad">Sub unidad:</label>
          <input type="text" class="form-control" id="sub_unidad" name="sub_unidad" required="" maxlength="20" minlength="1" placeholder="sub unidad: Ejemplo:algo" onkeypress="return letras(event);" autofocus="">
          <label for="nombre">Nombre de la unidad:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required="" minlength="1" maxlength="20" placeholder="Nombre de la unidad: Ejemplo: Incio al el desarrollo" onkeypress="return letras(event);">
        </div>
        <button type="submit" class="btn btn-default" name="Guardar">Registrarme</button>
      </form>
    </div>
    <!--row-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
    <br>
    <br>
  </div>
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $mensaje1; ?></h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $mensaje2; ?></h4>
                
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>
  <!--container-->
  <br>
  </body>
  </html>
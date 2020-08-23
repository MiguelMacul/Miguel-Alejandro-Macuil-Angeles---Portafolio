<?php
  require_once "ClaseAsistencia.php";
  if (isset($_POST['Buscar']))
  {
    $asistencia = new claseAsistencia();
    $res = $asistencia->BuscarActualizar($_POST['id_asistencia']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Pase de lista</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="../../img/logo.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 <script type="text/javascript" src="../../js/restricciones.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../css/maqueta.css">
</head>
<body>
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
    <li><a href="Alta.php">Alta Asistencia</a></li>
    <li><a href="baja.php">Baja Asistencia</a></li>
    <li><a href="consulta.php">Consulta de Asistencia</a></li>
    <li><a href="consultaEs.php">Consulta Especifical</a></li>
    <li><a href="#">Modificacion de Asistencia</a></li>
  </ul>
  <center>
  <h1>consulta asistencias</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_asistencia">Clave de asistencia a modificar:</label>
          <input type="number" class="form-control" id="id_asistencia" name="id_asistencia" autofocus="" required="" min="1" max="20000" placeholder="Ingresa la clave de la asistencia"  onkeypress="return numeros(event);">
        </div>
        <button type="submit" class="btn btn-default" name="Buscar">Buscar</button>
      </form>
      <?php 
        if(isset($_POST['Buscar'])) 
        {
           foreach ($res as $row):
      ?>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_asistencia">id_asistencia:</label>
          <input type="hidden" class="form-control" id="id_asistencia" name="id_asistencia" value="<?php echo $row['id_asistencia'];?>"> <input type="id_asistencia" class="form-control" id="id_asistencia" name="id_asistencia" value="<?php echo $row['id_asistencia'];?>"> <label for="matricula">Matricula</label>
          <input type="matricula" class="form-control" id="matricula" name="matricula" value="<?php echo $row['matricula'];?>"> <label for="fecha">Fecha</label>
          <input type="fecha" class="form-control" id="fecha" name="fecha" value="<?php echo $row['fecha'];?>"> <label for="observacion">observacion</label>
          <input type=observacion" class="form-control" id="observacion" name="observacion" value="<?php echo $row['observacion'];?>">
        </div>
        <button type="submit" class="btn btn-default" name="Actualizar">Actualizar</button>
      </form>
      <?php endforeach;
           } 
           if(isset($_POST['Actualizar']))
           {  $asistencia = new claseAsistencia();
        $res = $asistencia->
      Actualizar($_POST['id_asistencia'],$_POST['matricula'],$_POST['fecha'],$_POST['observacion']); } ?>
    </div>
    <!--col6-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--row-->
</div>
<!--container-->
</body>
</html>
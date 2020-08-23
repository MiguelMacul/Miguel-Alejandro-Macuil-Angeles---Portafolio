<?php
	require_once "ClaseCalificaciones.php";
	if (isset($_POST['Buscar']))
	{
		$calificaciones = new claseCalificaciones();
		$res = $calificaciones->BuscarActualizar($_POST['id_calificacion']);		
			
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
    <li><a href="alta.php">Alta calificaciones</a></li>
    <li><a href="bajas.php">Baja calificaciones</a></li>
    <li><a href="Consulta.php">Consulta de calificaciones</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="#">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Modificar de calificaciones</h1>
  </center>
  <div class="row">
    <div class="col-sm-7">
      </br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_calificacion">Clave de la Calificacion a modificar:</label>
          <input type="id_calificacion" class="form-control" id="id_calificacion" name="id_calificacion" autofocus="" required="" autofocus="" minlength="1" maxlength="20" min="1" max="2000000" placeholder="Clave de la calificacion: ejemplo: 1" onkeypress="return numeros(event);">
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
          <label for="id_calificacion">Id_Calificacion</label>
          <input type="hidden" class="form-control" id="id_calificacion" name="id_calificacion" value="<?php echo $row['id_calificacion'];?>"> <input type="id_calificacion" class="form-control" id="id_calificacion" name="id_calificacion" value="<?php echo $row['id_calificacion'];?>"> <label for="matricula">Matricula</label>
          <input type="matricula" class="form-control" id="matricula" name="matricula" value="<?php echo $row['matricula'];?>"> <label for="id_criterio">Id_criterio</label>
          <input type="id_criterio" class="form-control" id="id_criterio" name="id_criterio" value="<?php echo $row['id_criterio'];?>"> <label for="num_actividad">Num_actividad</label>
          <input type="num_actividad" class="form-control" id="num_actividad" name="num_actividad" value="<?php echo $row['num_actividad'];?>"> <label for="calificacion">calificacion</label>
          <input type="calificacion" class="form-control" id="calificacion" name="calificacion" value="<?php echo $row['calificacion'];?>"> <label for="observacion">Observacion</label>
          <input type="observacion" class="form-control" id="observacion" name="observacion" value="<?php echo $row['observacion'];?>">
        </div>
        <button type="submit" class="btn btn-default" name="Actualizar">Actualizar</button>
      </form>
      <?php endforeach;
           } 
           if(isset($_POST['Actualizar']))
           {  $calificaciones = new claseCalificaciones();
        $res = $calificaciones->
       Actualizar($_POST['id_calificacion'],$_POST['matricula'],$_POST['id_criterio'],$_POST['num_actividad'],$_POST['calificacion'],$_POST['observacion']); } ?>
    </div>
    <!--col6-->
    <div class="col-sm-3">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--row-->
  <br>
  <br>
</div>
<!--container-->
<br>
</body>
</html>
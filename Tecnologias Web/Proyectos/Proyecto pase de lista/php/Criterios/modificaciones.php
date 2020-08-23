<?php
	require_once "ClaseCriterios.php";
	if (isset($_POST['Buscar']))
	{
		$criterios = new claseCriterios();
		$res = $criterios->BuscarActualizar($_POST['id_criterio']);		
			
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
    <li><a href="#">Alta calificaciones</a></li>
    <li><a href="baja.php">Baja criterios</a></li>
    <li><a href="Consulta.php">Consulta de calificaciones</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Modificacion de criterios</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_criterio">Clave de Criterio:</label>
          <input type="number" class="form-control" id="id_criterio" name="id_criterio" required="" autofocus="" min="1" minlength="1" max="20000000" maxlength="20" placeholder="Clave de criterio: ejemplo: 2" onkeypress="return numeros(event);">
        </div>
        <button type="submit" class="btn btn-default" name="Eliminar">Eliminar</button>
      </form>
      <?php 
        if(isset($_POST['Buscar'])) 
        {
           foreach ($res as $row):
      ?>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_criterio">Id_Criterio</label>
          <input type="hidden" class="form-control" id="id_criterio" name="id_criterio" value="<?php echo $row['id_criterio'];?>"> <input type="id_criterio" class="form-control" id="id_criterio" name="id_criterio" value="<?php echo $row['id_criterio'];?>"> <label for="id_unidad">id_unidad</label>
          <input type="id_unidad" class="form-control" id="id_unidad" name="id_unidad" value="<?php echo $row['id_unidad'];?>"> <label for="nom_Criterio">Nombre del criterio</label>
          <input type="nom_Criterio" class="form-control" id="nom_Criterio" name="nom_Criterio" value="<?php echo $row['nom_criterio'];?>"> <label for="porcentaje">Porcentaje</label>
          <input type="porcentaje" class="form-control" id="porcentaje" name="porcentaje" value="<?php echo $row['porcentaje'];?>">
        </div>
        <button type="submit" class="btn btn-default" name="Actualizar">Actualizar</button>
      </form>
      <?php endforeach;
           } 
           if(isset($_POST['Actualizar']))
           {  $criterios = new claseCriterios();
        $res = $criterios->
      Actualizar($_POST['id_criterio'],$_POST['id_unidad'],$_POST['nom_Criterio'],$_POST['porcentaje']); } ?>
    </div>
    <!--col6-->
    <div class="col-sm-4">
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
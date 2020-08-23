<?php
    require_once "ClaseCalificaciones.php";
    if (isset($_POST['Eliminar']))
    {
        $calificaciones = new ClaseCalificaciones();
        $res = $calificaciones->eliminar($_POST['matricula']);       
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
    <li><a href="Alta.php">Alta calificaciones</a></li>
    <li><a href="#">Baja calificaciones</a></li>
    <li><a href="Consulta.php">Consulta de calificaciones</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="Modificar.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>baja de calificaciones</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="matricula">Calificacion a eliminar:</label>
          <input type="number" class="form-control" id="matricula" name="matricula" required="" min="1" maxlength="11" minlength="1" max="2000000" placeholder="Clave de la calificaciones: ejemplo: 1"  onkeypress="return numeros(event);">
        </div>
        <button type="submit" class="btn btn-default" name="Eliminar">Eliminar</button>
      </form>
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
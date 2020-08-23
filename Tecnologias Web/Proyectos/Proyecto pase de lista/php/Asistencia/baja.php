<?php
    require_once "ClaseAsistencia.php";
    if (isset($_POST['Eliminar']))
    {
        $usuarios = new claseAsistencia();
        $res = $usuarios->eliminar($_POST['matricula']);      
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
    <a href="../usuario/Entrada.phpp">Inicio</a>
    </li>
    <li><a href="alta.php">Alta Asistencia</a></li>
    <li><a href="#">Baja Asistencia</a></li>
    <li><a href="Consulta.php">Consulta de Asistencia</a></li>
    <li><a href="ConsultaEs.php">Consulta Especifical</a></li>
    <li><a href="Modificar.php">Modificacion de Asistencia</a></li>
  </ul>
  <center>
  <h1>baja asistencias</h1>
  </center>
  <div class="row">
    <div class="col-sm-4">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="matricula">Clave de asistencia a eliminar :</label>
          <input type="number" class="form-control" id="matricula" name="matricula" required="" autofocus="" placeholder="Clave de la asistencia: ejemplo : 5" onkeypress="return numeros(event)" min="1" max="10000">
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
</div>
<!--container-->
</body>
</html>
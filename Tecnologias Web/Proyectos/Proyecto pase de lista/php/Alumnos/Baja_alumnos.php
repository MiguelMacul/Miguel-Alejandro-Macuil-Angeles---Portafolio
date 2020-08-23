<?php
  require_once "ClaseAlumnos.php";
  if (isset($_POST['Eliminar']))
  {
    $usuarios = new ClaseAlumnos();
    $res = $usuarios->eliminar($_POST['nombre']);   
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pase de lista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../img/logo.ico">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/maqueta.css">
  <link rel="shortcut icon" href="../../img/logo.ico">
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
    <li class="active"><a href="../usuario/Entrada.php">Inicio</a></li>
    <li><a href="AltaAlumnos.php">Alta alumnos</a></li>
    <li><a href="#">Baja alumno</a></li>
    <li><a href="Consultaalumnos.php">Consulta de alumno</a></li>
    <li><a href="Especial.php">Consulta Especifical de alumno</a></li>
    <li><a href="Modificar.php">Modificacion de alumno</a></li>
  </ul>
  <center>
  <h1>Eliminar alumno</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="Usuario">Nombre del alumno a eliminar:</label>
          <input type="text" class="form-control" id="Usuario" name="nombre" onkeypress="return letras(event)" required="" minlength="3" maxlength="20" autofocus="" placeholder="Nombre del alumno: Ejemplo: Pedro Diaz Juarez">
        </div>
        <button type="submit" class="btn btn-default" name="Eliminar">Eliminar</button>
      </form>
    </div>
    <!--col6-->
    <div class="col-sm-6">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--row-->
</div>
<!--container-->
</body>
</html>
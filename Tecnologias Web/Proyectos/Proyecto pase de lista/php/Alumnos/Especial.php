<?php
  require_once "ClaseAlumnos.php";
  if (isset($_POST['Consultar']))
  {
  $donde = $_POST['donde'];
  $que = $_POST['que'];
    $usuario = new ClaseAlumnos();
    $a_users = $usuario->consultas_especificas($_POST['donde'],$_POST['que']);
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
    <li class="active"><a href="../usuario/Entrada.php">Inicio</a></li>
    <li><a href="AltaAlumnos.php">Alta alumnos</a></li>
    <li><a href="Baja_alumnos.php">Baja alumno</a></li>
    <li><a href="Consultaalumnos.php">Consulta de alumno</a></li>
    <li><a href="#">Consulta Especifical de alumno</a></li>
    <li><a href="Modificar.php">Modificacion de alumno</a></li>
  </ul>
  <center>
  <h1>consulta especial alumno</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="Usuario">INTRODUCE lo que buscas:</label>
          <input type="text" class="form-control" id="que" name="que" required="" autofocus="" placeholder="Ingresa lo que quieres buscar" minlength="3" maxlength="20" >
        </div>
        <div class="form-group">
          <label for="Usuario">INTRODUCE donde lo quieres buscar buscas:</label>
          <select name="donde" class="form-control" id="donde">
            <option value="matricula">Matricula del Alumno</option>
            <option value="apellidoP">Apellido Paterno del Alumno</option>
            <option value="apellidoM">Apellido Materno del Alumno</option>
            <option value="nombre">Nombre del Alumno</option>
            <option value="grupo">Grupo del Alumno</option>
            <option value="genero">Genero del Alumno</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="Consultar">Consultar</button>
      </form>
    </div>
    <!--col6-->
    <div class="col-sm-6">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--row-->
  <table class="table">
  <tr>
    <th>
      MATRICULA
    </th>
    <th>
      APELLIDO P
    </th>
    <th>
      APELLIDO M
    </th>
    <th>
      NOMBRE
    </th>
    <th>
      GRUPO
    </th>
    <th>
      GENERO
    </th>
  </tr>
  <?php 
  if(isset($_POST['Consultar']))
  {
     foreach ($a_users as $row):?>
  <tr>
    <td>
<?php echo $row['matricula'];?>
    </td>
    <td>
<?php echo $row['apellidoP'];?>
    </td>
    <td>
<?php echo $row['apellidoM'];?>
    </td>
    <td>
<?php echo $row['nombre'];?>
    </td>
    <td>
<?php echo $row['grupo'];?>
    </td>
    <td>
<?php echo $row['genero'];?>
    </td>
    <?php endforeach;
  }
  ?>
    </table>
  </div>
  <!--container-->
  </body>
  </html>
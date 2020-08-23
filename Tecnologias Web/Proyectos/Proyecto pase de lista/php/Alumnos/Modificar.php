<?php
    require_once "ClaseAlumnos.php";
    if (isset($_POST['Buscar']))
    {
        $usuarios = new ClaseAlumnos();
        $res = $usuarios->BuscarActualizar($_POST['matricula']);       
             
    }
?>

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
    <li><a href="Especial.php">Consulta Especifical de alumno</a></li>
    <li><a href="#">Modificacion de alumno</a></li>
  </ul>
  <center>
  <h1>Modificar</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="Usuario">Matricula del alumno a modificar:</label>
          <input type="text" class="form-control" id="Idusuario" name="matricula" autofocus="" required="" minlength="11" maxlength="11" placeholder="Matricula del Alumno: Ejemplo:141010368-4">
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
          <label for="Usuario">Matricula:</label>
          <input type="text" class="form-control" id="Usuario" name="matricula" value="<?php echo $row['matricula'];?>"> <label for="pwd">Apelldio Paterno</label>
          <input type="text" class="form-control" id="apellidoP" name="apellidoP" value="<?php echo $row['apellidoP'];?>"> <label for="pwd">Apellido Materno:</label>
          <input type="text" class="form-control" id="apellidoM" name="apellidoM" value="<?php echo $row['apellidoM'];?>"> <label for="pwd">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre'];?>"> <label for="pwd">Grupo:</label>
          <input type="text" class="form-control" id="grupo" name="grupo" value="<?php echo $row['grupo'];?>"> <label for="pwd">Genero:</label>
          <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $row['genero'];?>">
        </div>
        <button type="submit" class="btn btn-default" name="Actualizar">Actualizar</button>
      </form>
      <?php endforeach;
             } 
             if(isset($_POST['Actualizar']))
             {  $usuarios = new ClaseAlumnos();
                $res = $usuarios->
      Actualizar($_POST['matricula'],$_POST['apellidoP'],$_POST['apellidoM'],$_POST['nombre'],$_POST['grupo'],$_POST['genero']); } ?>
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
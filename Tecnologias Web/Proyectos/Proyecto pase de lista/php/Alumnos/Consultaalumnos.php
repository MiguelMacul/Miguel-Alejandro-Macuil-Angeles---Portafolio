<?php
  require_once "ClaseAlumnos.php";
  error_reporting(0);
  $usuarioModelo = new ClaseAlumnos();
  $a_users = $usuarioModelo->Resultado($_POST['salones']);
  $visible="none";
  if (isset($_POST['mandar'])) {
    if ($_POST['salones']) {
      $visible="block";
    }
  }
?>

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
    <li><a href="#">Consulta de alumno</a></li>
    <li><a href="Especial.php">Consulta Especifical de alumno</a></li>
    <li><a href="modificar.php">Modificacion de alumno</a></li>
  </ul>
  <center>
  <h1>Consulta alumno</h1>

  <div class="col-sm-4">
    
  </div>
  <div class="col-sm-4">
  <form role="form"  method="post" action=""> <h3 align="center
">Selecciona y un grupo</h3><br>
      <select class="form-control" name="salones" data-style="btn-danger">  
        <?php 
          $a = $usuarioModelo->Filtrar();
        ?>
          <?php foreach ($a as $row):?>
          <option multiple id="test" value=<?php echo $row['grupo'];?> ><?php print($row['grupo']);?>
          </option>
          <?php endforeach ?>
      </select><br><br>  
      <button type="submit" name="mandar" class="btn btn-default">Enviar</button>
    </form>
  </div>
  <div class="col-sm-4">
    
  </div>
  </center>
  <div class="row" >
    <div class="col-sm-8">
     <div style=<?php echo 'display:'.$visible;?>>
        <table class="table">
        <tr>
          <th>
            MATRICULA
          </th>
          <th>
            AP. PATERNO
          </th>
          <th>
            AP. MATERNO
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
        <?php foreach ($a_users as $row):?>
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
          <?php endforeach ?>
          </table>
        </div>
      </div>
      <!--col6-->
      <div class="col-sm-4">
        <img src="../../img/Sin nombre.png" width="300px" align="right">
      </div>
      <!--col 6-->
    </div>
    <!--row-->
  </div>
  <br>
  <!--container-->
  </body>
  </html>
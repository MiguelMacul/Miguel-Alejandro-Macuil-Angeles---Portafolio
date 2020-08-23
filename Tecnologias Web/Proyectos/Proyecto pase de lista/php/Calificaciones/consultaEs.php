<?php
  require_once "ClaseCalificaciones.php";
  error_reporting(0);
  $visible="none";
  if (isset($_POST['Consultar']))
  {
    $calificacionesModelo = new claseCalificaciones();
    $a_users = $calificacionesModelo->consultas_especificas($_POST['donde'],$_POST['que']);
    if ($_POST['que']) {
        $visible="block";
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
    <li><a href="bajas.php">Baja calificaciones</a></li>
    <li><a href="Consulta.php">Consulta de calificaciones</a></li>
    <li><a href="#">Consulta especifica</a></li>
    <li><a href="Modificar.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>consulta de calificaciones especial</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_calificacion">INTRODUCE lo que buscas:</label>
          <input type="id_calificacion" class="form-control" id="que" name="que" required="" autofocus="" maxlength="20" minlength="1" placeholder="Ingresa lo que deseas buscar:" onkeypress="return ambos(event);">
        </div>
        <div class="form-group">
          <label for="Usuario">INTRODUCE donde lo quieres buscar buscas:</label>
          <select name="donde" class="form-control" id="donde">
            <option value="id_calificacion">Clave de la Calificacion</option>
            <option value="matricula">Matricula del alumno</option>
            <option value="id_criterio">Clave del Criterio</option>
            <option value="id_criterio">Calificacion</option>
            <option value="num_actividad">Numero de Actividad</option>
            <option value="observacion">Observacion</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="Consultar">Consultar</button>
      </form>
    </div>
    <!--col6-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--row-->
  <div style=<?php echo 'display:'.$visible;?>>
      <table class="table">
      <tr>
        <th>
           Clave de Calificacion
        </th>
        <th>
           Matricula del alumno
        </th>
        <th>
           Clave de Criterio
        </th>
        <th>
           Calificacion
        </th>
        <th>
           Numero de Actividad
        </th>
        <th>
           Observacion
        </th>
      </tr>
      <?php 
      if(isset($_POST['Consultar']))
      {
         foreach ($a_users as $row):?>
      <tr>
        <td>
          <?php echo $row['id_calificacion'];?>
        </td>
        <td>
          <?php echo $row['matricula'];?>
        </td>
        <td>
          <?php echo $row['id_criterio'];?>
        </td>
        <td>
          <?php echo $row['calificacion'];?>
        </td>
        <td>
          <?php echo $row['num_actividad'];?>
        </td>
        <td>
          <?php echo $row['observacion'];?>
        </td>
        <?php endforeach;
      }
      ?>
        </table>
    </div>
    <br>
    <br>
  </div>
  <!--row-->
</div>
<!--col6-->
</div>
<!--container-->
<br>
</body>
</html>
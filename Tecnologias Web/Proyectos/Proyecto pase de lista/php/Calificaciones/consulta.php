<?php
	require_once "ClaseCalificaciones.php";
	error_reporting(0);
  $visible="none";
	$calificacionesModelo = new claseCalificaciones();
  $a_users = $calificacionesModelo->get_calificaciones();
	if (isset($_POST['mandar'])) {
    if ($_POST['numero']) {
      $visible="block";
      $resultado=$calificacionesModelo->Filtro($_POST['numero']);
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
    <li><a href="#">Consulta de calificaciones</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="Modificar.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>consulta de calificaciones</h1>
  </center>
  <div class="row">
    <div class="col-sm-12">
    <center>
      
     <form role="form"  method="post" action=""> <h3 align="center
">Selecciona el  numero de actividad</h3><br>
      <select class="selectpicker" name="numero" data-style="btn-danger">  
        <?php 
          $a = $calificacionesModelo->get_calificaciones();
        ?>
          <?php foreach ($a as $row):?>
          <option multiple id="test" value=<?php echo $row['grupo'];?> ><?php print($row['grupo']);?>
          </option>
          <?php endforeach ?>
      </select><br><br>  
      <button type="submit" name="mandar" class="btn btn-default">Enviar</button>
    </form>

    </center>

      </br></br>
      <div style=<?php echo 'display:'.$visible;?>>
          <table class="table">
          <tr>
            <th>
               Clave de la Calificacion
            </th>
            <th>
               Matricula
            </th>
            <th>
               Clave del Criterio
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
         foreach ($resultado as $row):?>
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
      ?>
            </table>
        </div>
      </div>
      <!--col6-->
      <div class="col-sm-4">
       
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
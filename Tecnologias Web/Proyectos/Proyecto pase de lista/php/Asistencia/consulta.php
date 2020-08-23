<?php
  require_once "ClaseAsistencia.php";
  error_reporting(0);
  $visible="none";
    $asistenciaModelo = new ClaseAsistencia();
    $a_users = $asistenciaModelo->Filtrar($_POST['fechas']);
    if (isset($_POST['mandar'])) {
        if ($_POST['fechas']) {
            $visible="block";
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../../img/logo.ico">
<title>Pase de lista</title>

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
    <li><a href="alta.php">Alta Asistencia</a></li>
    <li><a href="baja.php">Baja Asistencia</a></li>
    <li><a href="#">Consulta de Asistencia</a></li>
    <li><a href="consultaEs.php">Consulta Especifical</a></li>
    <li><a href="Modificar.php">Modificacion de Asistencia</a></li>
  </ul>
  <center>
  <h1>consulta asistencias</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">



<form role="form"  method="POST" action=""> <h3 align="center
">Selecciona la fecha que buscas</h3><br>
      <select class="selectpicker" name="fechas" data-style="btn-danger">  
        <?php 
          $a = $asistenciaModelo->get_asistencia();
        ?>
          <?php foreach ($a as $row):?>
          <option multiple id="test" value=<?php echo $row['fecha'];?> ><?php print($row['fecha']);?>
          </option>
          <?php endforeach ?>
      </select><br><br>  
      <button type="submit" name="mandar" class="btn btn-default">Enviar</button>
    </form>
      </br></br></br></br>
      <div style=<?php echo 'display:'.$visible;?>>
          <table class="table">
          <tr>
            <th>
              Id_asistencia
            </th>
            <th>
              Matricula
            </th>
            <th>
              Fecha
            </th>
            <th>
              Observacion
            </th>
          </tr>
          <?php 
         foreach ($a_users as $row):?>
          <tr>
            <td>
    <?php echo $row['id_asistencia'];?>
            </td>
            <td>
    <?php echo $row['matricula'];?>
            </td>
            <td>
    <?php echo $row['fecha'];?>
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
        <img src="../../img/Sin nombre.png">
      </div>
      <!--col 6-->
    </div>
    <!--row-->
  </div>
  <!--container-->
  </body>
  </html>
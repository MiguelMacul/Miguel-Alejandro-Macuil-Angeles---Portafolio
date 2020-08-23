<?php
	require_once "ClaseCriterios.php";
	error_reporting(0);
  $visible="none";
	  $criteriosModelo = new claseCriterios();
	  $a_users = $criteriosModelo->get_criterios();
    if (isset($_POST['mandar'])) {
      if ($_POST['Criterios']) {
         $visible="block";
         $resultado=$criteriosModelo->Filtro($_POST['Criterios']);
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
    <li><a href="alta.php">Alta criterios</a></li>
    <li><a href="baja.php">Baja criterios</a></li>
    <li><a href="#.php">Consulta de criterios</a></li>
    <li><a href="ConsultaEs.php">Consulta criterios</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Consulta de criterios</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br>
    <center> 
          <form role="form"  method="POST" action=""> <h3 align="center
    ">Selecciona la clave del criterio</h3><br>
          <select  class="form-control" name="Criterios" data-style="btn-danger">  
            <?php 
              $a = $criteriosModelo->get_criterios();
            ?>
              <?php foreach ($a as $row):?>
              <option multiple id="test" value=<?php echo $row['fecha'];?> ><?php print($row['fecha']);?>
              </option>
              <?php endforeach ?>
          </select><br><br>  
          <button type="submit" name="mandar" class="btn btn-default">Buscar</button>
        </form>
    </center>
      <div style=<?php echo 'display:'.$visible;?>>
          <table class="table">
          <tr>
            <th>
              Clave de Criterio
            </th>
            <th>
              Clave de Unidad
            </th>
            <th>
              Nombre del Criterio
            </th>
            <th>
              Porcentaje del criterio
            </th>
          </tr>
          <?php 
         foreach ($resultado as $row):?>
          <tr>
            <td>
    <?php echo $row['id_criterio'];?>
            </td>
            <td>
    <?php echo $row['id_unidad'];?>
            </td>
            <td>
    <?php echo $row['nom_Criterio'];?>
            </td>
            <td>
    <?php echo $row['porcentaje'];?>
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
    <br>
    <br>
  </div>
  <!--container-->
  <br>
  </body>
  </html>
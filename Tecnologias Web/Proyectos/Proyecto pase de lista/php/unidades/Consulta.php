<?php
	require_once "ClaseUnidades.php";
	$usuarioModelo = new claseUnidades();
  $visible="none";
  $pase="";
  error_reporting(0);
  if (isset($_POST['mandar'])) {
      if ($_POST['materia']) {
           $visible="block";
           $resultado=$usuarioModelo->get_usuarios($_POST['materia']);

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
    <li><a href="alta.php">Alta de unidad</a></li>
    <li><a href="baja.php">Baja de unidad</a></li>
    <li><a href="#">Consulta de unidad</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Consulta de  Unidades</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">

      <center>
      <form role="form"  method="post" action=""> 
      <h3 align="center">Selecciona la Materia que desea conocer sus unidades</h3><br>
        <select name="materia" data-style="btn-danger" class="form-control">
        <option></option><?php

        $respuesta=$usuarioModelo->materia();
        ?>
            <?php foreach ($respuesta as $row):?>
            <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php print($row['nombre']);?>
            </option>
            <?php endforeach ?>
        </select><br> 
        <button type="submit" name="mandar" class="btn btn-default">Enviar</button>
      </form>
    </center>
      </br></br>
      <div style=<?php echo 'display:'.$visible;?>>
        <table class="table">
        <tr>
          <th>
            Clave de la Unidad
          </th>
          <th>
            Clave de la Materia
          </th>
          <th>
            Sub unidad
          </th>
          <th>
            Nombre de la unidad
          </th>
        </tr>
        <?php foreach ($resultado as $row):?>
        <tr>
          <td>
  <?php echo $row['id_unidad'];?>
          </td>
          <td>
  <?php echo $row['id_materia'];?>
          </td>
          <td>
  <?php echo $row['sub_unidad'];?>
          </td>
          <td>
  <?php echo $row['nombre'];?>
          </td>
        </tr>
        <?php endforeach ?>
        </table>
      </div>
    </div>
    <!--row-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
    <br>
    <br>
  </div>
  <!--container-->
  <br>
  </body>
  </html>
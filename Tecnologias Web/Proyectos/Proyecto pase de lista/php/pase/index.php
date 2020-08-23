<?php
	require_once "ClasePase.php";
	$usuarioModelo = new ClasePase();
  $visible="none";
    error_reporting(0);
    $a_users="";
   $usuarioModelo->general();
  if(isset($_POST['mandar'])){
      $algo=$_POST['salones'];
      $a_users = $usuarioModelo->get_usuarios($algo);
      $visible="Block";
  }
	if(isset($_POST['Terminar']))
	{
      foreach ($_POST['estar'] as $estar) {
          $usuarioModelo->ingresar($estar);
        }
      
      
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Alta del Alumno</title>
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
    <li class="active"><a href="../Entrada.php">Inicio</a></li>
    <li class="dropdown">
    <ul class="nav nav-tabs">
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      ADMINISTRACION<span class="caret"></span></a>
      <ul class="dropdown-menu" class="nav nav-tabs">
        <li><a href="../Materia.php">Materias</a></li>
        <li><a href="../Alumnos/Baja_alumnos.php">Alumnos</a></li>
        <li><a href="../Asistencia/Alta.php">Asistencia</a></li>
        <li><a href="../Calificaciones/alta.php">Calificaciones</a></li>
        <li><a href="../Criterios/alta.php">Criterios</a></li>
        <li><a href="../unidades/alta.php">Unidades</a></li>
      </ul>
      </li>
    </ul>
    </li>
    <li class="dropdown">
    <ul class="nav nav-tabs">
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      PASE DE LISTA<span class="caret"></span></a>
      <ul class="dropdown-menu" class="nav nav-tabs">
        <li><a href="#">Pase de lista tradicional</a></li>
        <li><a href="PaseQr.php">Lector QR</a></li>
      </ul>
      </li>
    </ul>
    </li>
    <li class="dropdown">
    <ul class="nav nav-tabs">
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      REPORTE<span class="caret"></span></a>
      <ul class="dropdown-menu" class="nav nav-tabs">
        <li><a href="" data-toggle="tab">Semanal</a></li>
        <li><a href="" data-toggle="tab">Mensual</a></li>
      </ul>
      </li>
    </ul>
    </li>
    <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            EVALUAR<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="../Evaluar/Index.php" >Unidades</a></li>
          </ul>
        </li>
        </ul>
      </li>
    <li class="dropdown"><a href="../index.php">SALIR</a></li>
  </ul>
  <center>
  <h1>pase tradiciona</h1>


  <form role="form"  method="post" action="">
    <label>Secciona el grupo</label><br>
    <select class="selectpicker" name="salones" data-style="btn-danger"> 
      <?php 
          $a = $usuarioModelo->grupos();

        ?>
          <?php foreach ($a as $row):?>
          <option multiple  id="test" value=<?php echo $row['grupo'];?> ><?php print($row['grupo']);?>
          </option>

          <?php endforeach ?> 
    </select><br><br>
    <button type="submit" name="mandar" class="btn btn-default">enviar</button>
  </form>
  </center>
  <div class="row">
    <div class="col-sm-12">
      </br></br></br></br>
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
        <th>
          check
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
        <form role="form" method="post" action="">
          <td>
            <input type="checkbox" name="estar[]" value=<?php echo $row['matricula'];?> checked>
          </td>
          <?php endforeach ?>
          </table>
          
          <center><button type="submit" class="btn btn-default" value="Add color" name="Terminar">Terminar</button></center>
        </form>
        </div>
      </div>
      <!--row-->
      <br>
      <br>
    </div>
    <!--container-->
    <br>
    </body>
    </html>
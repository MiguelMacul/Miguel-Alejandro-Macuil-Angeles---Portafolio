<?php 
require_once "claseMateria.php";
$visible="none";
//$resultado="";
$var="";
$abre=new claseMateria();
if (isset($_POST['Guardar']))
  {
    $var=$_POST['Materia'];
    $resultado=$abre->BuscarActualizar($var);
    $visible="block";
  }

?>
<script type="text/javascript"></script>
<!DOCTYPE html>
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
    <li class="active">
    <a href="../usuario/Entrada.php">Inicio</a>
    </li>
    <li><a href="AltaMateria.php">Alta de Materias</a></li>
    <li><a href="Baja_Materia.php">Baja Materias</a></li>
    <li><a href="Consulta.php">Consulta de Materias</a></li>
    <li><a href="Consulta_Especiales.php">Consulta Especifical de Materias</a></li>
    <li><a href="Modificaciones.php">Modificacion de Materias</a></li>
  </ul>
  <center>
  <h1>Consulta general materia</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      <form role="form" method="POST" action="">
        <div class="form-group">
          <label for="Usuario">Clave de la Materia</label>
          <select class="form-control" name="Materia" data-style="btn-danger">  
              <?php 
                $a = $abre->get_usuarios();
              ?>
              <?php foreach ($a as $row):?>
             <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php echo $row['nombre'];?>
            </option>
            <?php endforeach ?>
           </select>
          <br>
          <button type="submit"  name="Guardar" class="btn btn-default" value="Ocultar">Ingresar</button>
      </form>
      <br><br>
      <div style=<?php echo 'display:'.$visible;?>>
      <table class="table">
        <tr>
          <td>
            Clave de la Materia
          </td>
          <td>
            Nombre de la Materia
          </td>
          <td>
            Horas de la Materia
          </td>
        </tr>
        <tr>
        <?php foreach ($resultado as $row):
       
        ?>
          <td><?php echo $row['id_materia']?></td>
          <td><?php echo $row['nombre']?></td>
          <td><?php echo $row['horas']?></td>
        </tr>
      <?php endforeach ?> 
      </table>
      </div>
      </div>
      <!--col 6-->
    </div>
    <!--row-->
    <div class="col-sm-6">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--container-->
  </body>
  </html>
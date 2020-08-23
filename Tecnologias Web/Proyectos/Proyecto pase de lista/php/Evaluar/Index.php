<?php
  require_once "ClaseEvaluacion.php";
  $algo="";
  error_reporting(0);
  $usuarioModelo="";
  $usuarioModelo = new ClaseEvaluacion();
  
  if(isset($_POST['mandar'])){
    /*if($_POST['test']==$row['grupo']) {
     
    } */
     $algo=$_POST['salones'];
      $a_users = $usuarioModelo->get_usuarios($algo);
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
    <li class="active">
    <a href="../Entrada.php">Inicio</a>
    </li>
    <li><a href="../Materia.php">Alta Materias</a></li>
    <li><a href="#">Baja Materias</a></li>
    <li><a href="Consulta.php">Consulta de Materias</a></li>
    <li><a href="Consulta_Especiales">Consulta Especifical de Materias</a></li>
    <li><a href="Modificaciones.php">Modificacion de Materias</a></li>
  </ul>
  <center>
  <h1>Evaluacion alumnos</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
    <form role="form"  method="post" action=""> <h3 align="left">Selecciona y un grupo</h3><br>
      <select class="selectpicker" name="salones" data-style="btn-danger">
     
        <?php 
          $a = $usuarioModelo->grupos();

        ?>
          <?php foreach ($a as $row):?>
          <option multiple  id="test" value=<?php echo $row['grupo'];?> ><?php print($row['grupo']);?>
          </option>

          <?php endforeach ?>
         
      </select>
      <h3 align="left">Id criterio</h3>
      <select> class="selectpicker" data-style="btn-danger">
        <option multiple>s</option>
        <option>s</option>
      </select>
      <br>
      <br>
        <button type="submit" name="mandar" class="btn btn-default">Enviar</button>
          </form>

    </div>
    <!--col 6-->
    <div class="col-sm-6">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
    <table class="table">
    <tr>
      <td>
        Matricula
      </td>
      <td>
        Nombres
      </td>
      <td>
        calificacion
      </td>
      <td>
        OBSERVACION
      </td>
    </tr>
    <?php foreach ($a_users as $row):?>
    <tr>
      <td>
<?php echo $row['matricula'];?>
      </td>
      <td>
<?php echo $row['nombre'];?>
      </td>
      <td>
        <select class="selectpicker">
          <option>E</option>
          <option>S</option>
          <option>I</option>
          <option>NP</option>
        </select>
      </td>
      <td>
        <form role="form" method="post" action="">
          <input type="" class="form-control" id="Usuario" name="matricula">
        </form>
      </td>
    </tr>
    <?php endforeach ?>
    </table>
    <br>
  </div>
  <!--row-->
</div>
<!--container-->
<br>
</body>
</html>
<?php
  require_once "ClaseAsistencia.php";
  error_reporting(0);
  $visible="none";
  if (isset($_POST['Consultar']))
  {
    $asistenciaModelo = new ClaseAsistencia();
    $a_users = $asistenciaModelo->consultas_especificas($_POST['donde'],$_POST['que']);
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
    <li><a href="consulta.php">Consulta de Asistencia</a></li>
    <li><a href="consultaEs.php">Consulta Especifical</a></li>
    <li><a href="Modificar.php">Modificacion de Asistencia</a></li>
  </ul>
  <center>
  <h1>consulta asistencias</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_asistencia">INTRODUCE lo que buscas:</label>
          <input type="text" class="form-control" id="que" name="que" required="" autofocus="" placeholder="Ingresa lo que deseas buscar" minlength="3" maxlength="20" onkeypress="return personal(event)">
        </div>
        <div class="form-group">
          <label for="asistencia">INTRODUCE donde lo quieres buscar buscas:</label>
          <select name="donde" class="form-control" id="donde">
            <option value="id_asistencia">Clave de la asistencia</option>
            <option value="matricula">Matricula del alumno</option>
            <option value="fecha">Fecha de la asistencia</option>
            <option value="observacion">Observacion de la asitencia</option>
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
            fecha
          </th>
          <th>
            Observacion
          </th>
        </tr>
        <?php if(isset($_POST['Consultar'])){
               foreach ($a_users as $row):
        ?>
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
            <?php endforeach;}  ?>
        </tr>
      </table>
    </div>
    <br>
        </div>  
    </div>
<script type="text/javascript">
  function personal(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9A-Za-zñÑ-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
</script>
  </body>
</html>
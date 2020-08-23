<?php
  require_once "ClaseAsistencia.php";
  if (isset($_POST['Guardar']))
  {
    $asis = new claseAsistencia();
    $res = $asis->insertar($_POST['matricula'],$_POST['fecha'],$_POST['observacion']);    
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
    <li><a href="#">Alta Asistencia</a></li>
    <li><a href="baja.php">Baja Asistencia</a></li>
    <li><a href="Consulta.php">Consulta de Asistencia</a></li>
    <li><a href="ConsultaEs.php">Consulta Especifical</a></li>
    <li><a href="Modificar.php">Modificacion de Asistencia</a></li>
  </ul>
  <center>
  <h1>Alta asistencias</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="matricula">Matricula:</label>
          <input type="matricula" class="form-control" id="matricula" name="matricula" required="" autofocus="" minlength="11" maxlength="11" placeholder="Matricula del alumno: ejemplo : 141010368-7" onkeypress="return matricul(event);">
          <label for="fecha">Fecha:</label>
          <input type="date" class="form-control" id="fecha" name="fecha" required="">
          <label for="observacion">Observacion:</label>
          <input type="observacion" class="form-control" id="observacion" name="observacion" required="" placeholder="Observacion sobre la asistencias del alumno" minlength="3" maxlength="30" onkeypress="return letras(event);">
        </div>
        <button type="submit" class="btn btn-default" name="Guardar">Registrarme</button>
      </form>
    </div>
    <!--col6-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
  </div>
  <!--row-->
</div>
<script type="text/javascript">
  function matricul(e){ // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
 } 
</script>
<!--container-->
</body>
</html>
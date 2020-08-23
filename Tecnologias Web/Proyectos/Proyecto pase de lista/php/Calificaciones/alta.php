<?php
    require_once "ClaseCalificaciones.php";
    if (isset($_POST['Guardar']))
    {
        $calificaciones = new claseCalificaciones();
        $res = $calificaciones->insertar($_POST['matricula'],$_POST['id_criterio'],$_POST['num_actividad'],$_POST['calificacion'],$_POST['observacion']);     
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
		<li><a href="#">Alta calificaciones</a></li>
		<li><a href="bajas.php">Baja calificaciones</a></li>
		<li><a href="Consulta.php">Consulta de calificaciones</a></li>
		<li><a href="ConsultaEs.php">Consulta especifica</a></li>
		<li><a href="Modificar.php">Modificaciones</a></li>
	</ul>
	<center>
	<h1>Alta calificaciones</h1>
	</center>
	<div class="row">
		<div class="col-sm-6">
			</br></br></br></br>
			<form role="form" method="post" action="">
				<div class="form-group">
					<label for="matricula">Matricula del alumno:</label>
					<input type="matricula" class="form-control" id="matricula" name="matricula" required="" autofocus="" minlength="11" maxlength="11" placeholder="Matricula del alumno: ejemplo: 141010368-9" onkeypress="return matricul(event);">
					<label for="id_criterio">Clave del Criterio:</label>
					<input type="number" class="form-control" id="
					id_criterio" name="id_criterio" required="" min="1" max="20000" placeholder="Clave de criterio: ejemplo:20" onkeypress="return numeros(event);">
					<label for="num_actividad">Numero de la actividad:</label>
					<input type="number" class="form-control" id="num_actividad" name="num_actividad" required="" maxlength="20" minlength="1" min="1" max="20000" placeholder="Numero de actividad: ejemplo:1" onkeypress="return numeros(event);">
					<label for="calificacion">Calificacion:</label>
					<input type="calificacion" class="form-control" id="calificacion" name="calificacion" required="" maxlength="" placeholder="Calificacion: ejemplo: E,S,I,NP" onkeypress="return letras(event);">
					<label for="observacion">Observacion:</label>
					<input type="observacion" class="form-control" id="observacion" name="observacion" required="" maxlength="20" minlength="1" placeholder="Observacion: ejemplo: El alumno entrego en buen estado el trabajo" onkeypress="return letras(event);">
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
	<br>
	<br>
</div>
<!--container-->
<br>
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
</body>
</html>
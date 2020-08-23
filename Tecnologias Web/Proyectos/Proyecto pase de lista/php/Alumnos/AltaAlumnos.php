<?php
 require_once "ClaseAlumnos.php";
	if (isset($_POST['Guardar']))
	{
		$usuarios = new ClaseAlumnos();
		$res = $usuarios->insertar($_POST['matricula'],$_POST['apellidoP'],$_POST['apellidoM'],$_POST['nombre'],$_POST['grupo'],$_POST['genero']);		
	}
  if (isset($_POST['salida']))
  {
     header('Location:../index.php');
  }

    
?>


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
    <li class="active"><a href="../usuario/Entrada.php">Inicio</a></li>
    <li><a href="#">Alta alumnos</a></li>
    <li><a href="Baja_alumnos.php">Baja alumno</a></li>
    <li><a href="Consultaalumnos.php">Consulta de alumno</a></li>
    <li><a href="Especial.php">Consulta Especifical de alumno</a></li>
    <li><a href="Modificar.php">Modificacion de alumno</a></li>
  </ul>



  <div class="row">
    <div class="col-sm-6">
       <form role="form" method="post" action="">
  	            <div class="form-group">
    	            <label for="Usuario">Matricula:</label>
    	            <input type="text" class="form-control" id="Usuario" name="matricula" placeholder="Matricula ejemplo:141010368-1" onkeypress="return matricula(event)" required="" autofocus="" maxlength="11" maxlength="11">
  	               <label for="Usuario">Apellido Paterno del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="apellidoP" maxlength="20" minlength="3" placeholder="Apellido Paterno del alumno : ejemplo Hernan">
    	            <label for="Usuario">Apellido Materno del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="apellidoM" required="" maxlength="20" minlength="3" placeholder="Apellido Materno del alumno : ejemplo Valdez">
    	            <label for="Usuario">Nombre del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="nombre" required="" maxlength="20" minlength="3" placeholder="Nombre del alumno : ejemplo Elena">
    	            <label for="Usuario">Grupo del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="grupo" required="" maxlength="3" maxlength="3" placeholder="Ingresa el grupo del alumno : ejemplo: 506">
    	            <label for="Usuario">Genero del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="genero" required=""  maxlength="7" minlength="5" placeholder="Ingresa el genero del alumno: ejemplo: Hombre & Mujer"><br>
                 <button type="submit" class="btn btn-default" name="Guardar">Registrarme</button>
	         </form>
           <br>
     </div><!--col 6-->
     
  </div><!--row-->
  <div class="col-sm-4">
       <img src="../../img/Sin nombre.png">


     </div><!--col 6-->

 
</body>
</html>

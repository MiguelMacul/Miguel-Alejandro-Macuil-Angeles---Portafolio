<?php
	require_once "ClaseQr.php";
	$algo=$_GET['matricula']; 
	$objeto=new ClaseQr();
	$resultado=$objeto->buscar($algo);
   // $objeto->ingresar($algo);

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
     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            ADMINISTRACION<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="../Materia.php" >Materias</a></li>
              <li><a href="../Alumnos/Baja_alumnos.php" >Alumnos</a></li>
              <li><a href="../Asistencia/Alta.php" >Asistencia</a></li>
              <li><a href="../Calificaciones/alta.php">Calificaciones</a></li>
              <li><a href="../Criterios/alta.php" >Criterios</a></li>
              <li><a href="../unidades/alta.php">Unidades</a></li>
          </ul>
        </li>
        </ul>
     </li> 
     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            PASE DE LISTA<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="index.php" >Pase de lista tradicional</a></li>
              <li><a href="#" >Lector QR</a></li>
          </ul>
        </li>
        </ul>
     </li> 
     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            REPORTE<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="" data-toggle="tab">Semanal</a></li>
              <li><a href="" data-toggle="tab">Mensual</a></li>
          </ul>
        </li>
        </ul>
        <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            EVALUAR<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="Evaluar/Index.php" >Unidades</a></li>
          </ul>
        </li>
        </ul>
    </li>
    <li class="dropdown"><a href="../index.php">SALIR</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    </div> <!--home-->
    <div id="admin" class="tab-pane fade">
      <h3>Administracion </h3>
       <a href="Materia.php" class="btn btn-success" role="button">
       Materias</a>
       <div class="btn-group">
         <button type="button" class="btn btn-success">
         Alumnos</button>
         <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
         </button>
         <ul class="dropdown-menu" role="menu">
           <li><a href="#">Alta  Alumnos</a></li>
           <li><a href="ConsultaAlumnos.php">
             Consultas Alumnos</a></li>
         </ul>
       </div>
    </div><!--admin-->
    <div id="alum" class="tab-pane fade">
      <h3>Alumnos</h3>
       <a href="#" class="btn btn-success" role="button">Tradicional</a>
       <a href="#" class="btn btn-success" role="button">Insertar </a>
       <a href="Lectorqr.php" class="btn btn-success" role="button">Lector Qr</a>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  totam rem aperiam.</p>
    </div><!--alum-->
    <div id="reportes" class="tab-pane fade">
      <h3>Alumnos</h3>
       <a href="#" class="btn btn-success" role="button">Semanal</a>
        <a href="#" class="btn btn-success" role="button">Mensual</a>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
    </div><!--reportes-->
  </div><!--tab content-->
  <div class="row">
    <div class="col-sm-6">
       	<h1>Matricula:<?php echo $algo=$_GET['matricula']; ?></h1>
       	<?php 
       		foreach ($resultado as $row){
       			echo "<h1>".$row['nombre']." ".$row['apellidoP']." ".$row['apellidoM']."</h1>";
          
            echo "<h1>"."Grupo:  ".$row['grupo']."</h1>";

       		}
       		
       	?>
        <h1 align="center">El pase de lista del alumno fue exitoso</h1>
        <br><br>
    </div><!--col 6-->
    <div class="col-sm-6">
    <h2></h1>
     <img src="../../img/Sin nombre.png">
       
    </div><!--col 6-->
  </div><!--row-->
  


</body>
</html>

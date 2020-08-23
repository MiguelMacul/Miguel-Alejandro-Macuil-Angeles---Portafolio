<?php
	require_once "ClaseAlumnos.php";
	  $que = $_GET['matricula'];
	  $usuario = new ClaseAlumnos();
	  $a_users = $usuario->consultas_especificas('matricula',$que);
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Alta del Alumno</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/maqueta.css">
</head>
<body>
 <div class="container">
  <div class="row">
    <div class="col-sm-10">
       <h1 class="text-right">Pase de Lista Automatizado</h1>
    </div>
    <div class="col-sm-2">
       <img src="../img/qr.png" width="80" height="80" class="center">
    </div>
   </div>  
  <ul class="nav nav-tabs"  >
     <li class="active" >
      <a data-toggle="tab" href="../index.php#home">Inicio</a>
     </li>
     <li><a data-toggle="tab" href="#admin" >Administrar</a></li> 
     <li><a data-toggle="tab" href="#alum">Alumnos</a></li> 
     <li><a data-toggle="tab" href="#reportes">Reportes</a></li>     
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1>Bienvenido</h1>
    </div> <!--home-->
    <div id="admin" class="tab-pane fade">
      <h3>Administracion </h3>
       <a href="#" class="btn btn-success" role="button">
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
      <?php foreach ($a_users as $row):?>
       <form role="form" method="post" action="">
  	      <div class="form-group">
    	     <label for="Usuario">Matricula:</label>
    	     <?php echo "<h1>". $row['matricula']."</h1>";?>
    	        </div><br/>
    	     <div class="form-group">
  	         <label for="Usuario"></label>
    	    <?php echo "<h1>". $row['nombre']." ". $row['apellidoP']."</h1>";?>
    	    <input type="radio" name="accion" value="1"/><h3>Calificar</h3><br/>
    	    <input type="radio" name="accion"value="2"/><h3>Pasar </h3>
  	      </div>
                 <button type="submit" class="btn btn-default" name="Guardar">Registrarme</button>
	         </form>
	        <?php
	         endforeach;
	         ?>
     </div><!--col 6-->
     <div class="col-sm-6">
    
     </div><!--col 6-->
  </div><!--row-->
  
  
  
</div>


	
</body> 
</html>
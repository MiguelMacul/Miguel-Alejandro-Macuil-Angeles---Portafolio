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
     <li><a href="../../index.php">Inicio</a></li>
     
     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            ADMINISTRACION<span class="caret"></span></a>
            
        </li>
        </ul>
     </li> 

     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            ALUMNOS<span class="caret"></span></a>
        </li>
        </ul>
     </li> 

     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            REPORTE<span class="caret"></span></a>
        </li>
        </ul>
    </li>
  </ul>
 <div>
 	<h1 align="center"> Bienvenido <?php echo "".$_GET['nombre']; ?></h1>
		<center><img src="temp/prueba.png"/></center>
		<form role="form"  method="post" action="descargar.php">
			<label>Descargar codigo</label><br>
		       <button type="submit" class="btn btn-default" name="Ingresar">
		       baja xD</button>	
		   </form>
		   <br>
		  
	</div><!--container-->



</div>
  
</body>
</html>

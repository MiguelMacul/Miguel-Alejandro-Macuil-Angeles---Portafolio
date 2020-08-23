<?php

   $bandera="";
    $ola="";
    $contra="";
	if(isset($_POST['entrar']))
	{
    require_once "/php/usuario/ClaseAlumnos.php";
    
    $contra = $_POST['password'];
		$usuar= $_POST['usuario'];
    $usuarios=new ClaseAlumnos();
   $ola=$usuarios->login($usuar,$contra);
   
    
	}	
  if($ola=="EL usuario esta mal"){
      $bandera="no";
    }else{
      $bandera="si";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pase Lista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/maqueta.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="img/logo.ico">
</head>
<body> 
<?php
if($bandera=="no"){
  ?> 
    <script type="text/javascript">
            $(document).ready(function()
          {
             $("#mostrarmodal").modal("show");
          });
       </script>
  <?php
   }
   ?>
 <div class="container">
 <br/><br/><br/>
  <div class="row">
    <div class="col-sm-10">
       <h1 class="text-right">Pase de Lista Automatizado</h1>
    </div>
    <div class="col-sm-2">
       <img src="img/qr.png" width="80" height="80" >
    </div>
   </div>  
  <ul class="nav nav-tabs"  >
     <li class="active" >
      <a data-toggle="tab" href="#home">Inicio</a>
   </li>
     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a data-toggle="tab" href="#">
            ADMINISTRACION<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="Materia.php" >Materias</a></li>
              <li><a href="Alumnos/Baja_alumnos.php" >Alumnos</a></li>
              <li><a href="Asistencia/Alta.php" >Asistencia</a></li>
              <li><a href="Calificaciones/alta.php">Calificaciones</a></li>
              <li><a href="Criterios/alta.php" >Criterios</a></li>
              <li><a href="unidades/alta.php">Unidades</a></li>
          </ul>
        </li>
        </ul>
     </li> 
 
     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a data-toggle="tab" href="#">
            PASE DE LISTA<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="pase/index.php" >Pase de lista tradicional</a></li>
              <li><a href="" >Lector QR</a></li>
          </ul>
        </li>
        </ul>
     </li> 

     <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a data-toggle="tab" href="#">
            REPORTE<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="">Semanal</a></li>
              <li><a href="">Mensual</a></li>
          </ul>
        </li>
        </ul>
    </li>

    <li class="dropdown"> <ul class="nav nav-tabs">
        <li class="dropdown">
          <a data-toggle="tab" href="#">
            EVALUAR<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="Evaluar/Index.php" >Unidades</a></li>
          </ul>
        </li>
        </ul>
    </li>
      <li><a href="php/usuario/grupo.php">Registrarce</a></li>     
  </ul>
 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1>Bienvenido</h1>
    </div> <!--home-->
    <div id="admin" class="tab-pane fade">
      <h3>Administracion </h3>
       <a href="php/AltaMaterias.php" class="btn btn-success" role="button">Materias</a>
       <div class="btn-group">
         <button type="button" class="btn btn-success">Alumnos</button>
         <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
         </button>
         <ul class="dropdown-menu" role="menu">
           <li><a href="php/AltaAlumnos.php">Alta  Alumnos</a></li>
           <li><a href="php/ConsultaAlumnos.php">Consultas Alumnos</a></li>
         </ul>
       </div>
    </div><!--admin-->
    <div id="alum" class="tab-pane fade">
      <h3>Alumnos</h3>
       <a href="#" class="btn btn-success" role="button">Tradicional</a>
       <a href="#" class="btn btn-success" role="button">Insertar </a>
       <a href="php/qr.php" class="btn btn-success" role="button">Qr</a>
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
     <img src="img/logo.PNG"  width="250" height="250" class="img-rounded center"/ alt="logo">
    </div>
    <div class="col-sm-6">
      <h1>Iniciar Sesion</h1>
      <form role="form"  method="post" action="">
         <div class="form-group">
           <label>Usuario</label>
           <label class="sr-only" for="Usuario">Usuario</label>
           <span class="glyphicon glyphicon-user"></span>
           <input type="text" class="form-control" id="ejemplo" placeholder="Usuario" name="usuario" required="" onkeypress="return validarn(event)">
         </div><!--form group-->
         <div class="form-group">
           <label>contrace&ntilde;a</label>
           <label class="sr-only" for="ContraseÒa">ContraseÒa</label>
           <span class="glyphicon glyphicon-asterisk"></span>
           <input type="password" class="form-control" placeholder="ContraseÒa" name="password" required>
        </div><!--form group-->
        <button type="submit" class="btn btn-default" name="entrar">Entrar</button>
        </form>
     </div><!--col 6-->
  </div><!--row-->
  <br/><br/><br/><br/><br/><br/>
</div><!--container-->
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Error</h3>
     </div>
         <div class="modal-body">
            <h4>El usuario o contrase&ntilde;a son equibocas</h4>
            verfique sus datos.    
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>

<script type="text/javascript">
  function validarn(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9A-Za-zÒ—'·ÈÌÛ˙¡…Õ”⁄‡ËÏÚ˘¿»Ã“Ÿ‚ÍÓÙ˚¬ Œ‘€—Ò‰ÎÔˆ¸ƒÀœ÷‹\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
</script>
</body>
</html>

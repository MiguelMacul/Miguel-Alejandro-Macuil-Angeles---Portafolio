<?php
    $bandera="si";
    $ola="";
    $contra="";
	if (isset($_POST['Ingresar']))
	{
    require_once "Proceso.php";
    $codigo1=$_POST['codigo'];
    $comunicacon=new Proceso;
    $ola=$comunicacon->consultar($codigo1);
   if($ola=="La consulta esta mal"){
        $bandera="no";
      }else{
        $bandera="si";
      }
  }
 
?>
<html lang="en">
<head>
  <title>Pase Lista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/maqueta.css">
  <link rel="shortcut icon" href="../../img/logo.ico">
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
       <img src="../../img/qr.png" width="80" height="80" >
    </div>
   </div>  
  <ul class="nav nav-tabs"  >
     <li class="active" >
      <a href="../../index.php">Inicio</a>
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
          <a  data-toggle="tab" href="#">
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
          <a  data-toggle="tab" href="#">
            REPORTE<span class="caret"></span></a>
            <ul class="dropdown-menu" class="nav nav-tabs">
              <li><a href="" data-toggle="tab">Semanal</a></li>
              <li><a href="" data-toggle="tab">Mensual</a></li>
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
      <li><a href="#">Registrarce</a></li>     
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
  <div class="col-sm-2"></div>
    <div class="col-sm-8" class="center-block" align="center">
      <h1>Ingreso</h1>
      <form role="form"  method="post" action="">

         <div class="form-group">
           <label class="sr-only" for="Usuario">Codigo de grupo</label>
           <span class="glyphicon glyphicon-user"></span>
           <input type="text" class="form-control" id="ejemplo" autofocus="" placeholder="Codigo de grupo" name="codigo" required onkeypress="return validarn(event)">
         </div><!--form group-->
         

        <button type="submit" class="btn btn-default" name="Ingresar">Ingresar</button>
        </form>
     </div><!--col 6-->
     <div class="col-sm-2"></div>
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
            <h4>El codigo de  grupo es equivoco porfavor</h4>
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
   patron = /[0-9\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
</script>
</body>
</html>

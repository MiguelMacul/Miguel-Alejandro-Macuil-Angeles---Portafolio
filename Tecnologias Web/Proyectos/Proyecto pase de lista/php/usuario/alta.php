<?php
 require_once "ClaseAlumnos.php";
 require_once "ClaseQr.php";
 $bandera="";
 $Mensaje="";
 $salida="no";
 $res="";
 $encontro="no";
	if (isset($_POST['Guardar']))
	{ 
    $cadena=$_POST['matricula'];
    $Matricula=strlen($cadena);
    $Paterno=strlen($_POST['apellidoP']);
    $Materno=strlen($_POST['apellidoM']);
    $Nombre=strlen($_POST['nombre']);
    $Grupo=strlen($_POST['grupo']);
		$usuarios = new ClaseAlumnos();
    if (11==$Matricula){
      $arr2 = str_split($_POST['matricula'], 1);
      if($arr2[9]=="-"){
          $encontro="si"; 
        }
        else{
        $Mensaje="<br>"."El matricula ingresado no es valido:".$_POST['grupo']."<br>";
        $bandera="no";
        $salida="si"; 
        }
    }else{      
      $Mensaje="La matricula ingresada esta equivocada:".$_POST['matricula']."<br>";
      $bandera="no";
      $salida="si";
    }
    if($Paterno>=4){
        $bandera="si";
      }elseif($Paterno<4){
        $Mensaje=$Mensaje."<br>"."El apelldio Paterno ingresado no es valido:".$_POST['apellidoP']."<br>";
         $bandera="no";
         $salida="si";
    }
    if($Materno>=4){
        $bandera="si";
      }elseif($Materno<4){
        $Mensaje=$Mensaje."<br>"."El apelldio Materno ingresado no es valido:".$_POST['apellidoM']."<br>";
         $bandera="no";
         $salida="si";
    }
    if($Nombre>=3){
        $bandera="si";
      }elseif($Nombre<3){
        $Mensaje=$Mensaje."<br>"."El nombre ingresado no es valido:".$_POST['nombre']."<br>";
         $bandera="no";
         $salida="si";
    }
    if($Grupo>=3){
        $bandera="si";
      }elseif($Grupo<3){
        $Mensaje=$Mensaje."<br>"."El grupo ingresado no es valido:".$_POST['grupo']."<br>";
         $bandera="no";
         $salida="si";
    }
    if($salida=="no"){
        $res = $usuarios->insertar2($_POST['matricula'],$_POST['apellidoP'],$_POST['apellidoM'],$_POST['nombre'],$_POST['grupo'],$_POST['genero']);
    }	
    if($res=="Existe"){
        $bandera="no";
        $Mensaje="Los datos ingresados pertenecen a un alumno ya registrado";
    }
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
</head>
<body>
<?php
  if($bandera=="no"){
?> 
    <script type="text/javascript">
      $(document).ready(function(){
        $("#mostrarmodal").modal("show");
      });
    </script>
  <?php
  }
?>
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
  <div class="row">
    <div class="col-sm-4">
       <form role="form" method="post" action="" name="form1" onKeyUp="Matricula('matricula','caracteres',this, 11); Paterno('apellidoP','caracteres',this, 11);  Paterno('apellidoM','caracteres',this, 11); Nombre('nombre','caracteres',this, 16);
       Grupo('grupo','caracteres',this, 3);"> 
  	            <div class="form-group">
    	            <label for="Usuario">Matricula:</label>
    	            <input type="text" class="form-control" id="Usuario" name="matricula" required="" onkeypress="return validarn(event)" maxlength="11" minlength="11" placeholder="Matricula ejemplo:141010368-1" autofocus="">
  	               <label for="Usuario">Apellido Paterno del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="apellidoP" required="" onkeypress="return validarn2(event)" placeholder="Apellido Paterno ejemplo: Mendez" maxlength="20" minlength="4">
    	            <label for="Usuario">Apellido Materno del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="apellidoM" required="" onkeypress="return validarn2(event)" placeholder="Apellido Materno ejemplo: Sanchez" maxlength="20" minlength="4">
    	            <label for="Usuario">Nombre del alumno:</label>
    	            <input type="text" class="form-control" id="Usuario" name="nombre" required="" onkeypress="return validarn2(event)" placeholder="Nombre del Alumno ejemplo: Juan" minlength="3" maxlength="20">
    	            <label for="Usuario">Grupo del alumno:</label>
    	            <input type="number" placeholder="Grupo ejemplo: 604" class="form-control" id="Usuario" name="grupo" required="" onkeypress="return validarn3(event)">
    	            <label for="Usuario">Genero del alumno:</label>.
                  <br>
    	              <input type="radio" name="genero" value="Hombre" required="">Hombre<br>
                  <br>
		                <input type="radio" name="genero" value="Mujer" required="">Mujer<br>
                  
  	             </div>
                 <button type="submit" class="btn btn-default" name="Guardar">Registrarme</button>
	         </form>
     </div><!--col 6-->
     <div class="col-sm-4">
       <img src="../../img/Sin nombre.png">
     </div><!--col 6-->
  </div><!--row-->
  <br>
</div><!--container-->


<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Error en registro</h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $Mensaje; ?>  
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
   patron = /[0-9-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
  function validarn2(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[A-Za-zñÑáéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
  function validarn3(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
  function Matricula(txt, dst, formul, maximo){
      var largo
      largo = formul[txt].value.length
      if (largo > maximo){
      formul[txt].value = formul[txt].value.substring(0,maximo)
      formul[dst].value = formul[txt].value.length
      }
    }
    function Paterno(txt, dst, formul, maximo){
      var largo
      largo = formul[txt].value.length
      if (largo > maximo){
      formul[txt].value = formul[txt].value.substring(0,maximo)
      formul[dst].value = formul[txt].value.length
      }
    }
    function Nombre(txt, dst, formul, maximo){
      var largo
      largo = formul[txt].value.length
      if (largo > maximo){
      formul[txt].value = formul[txt].value.substring(0,maximo)
      formul[dst].value = formul[txt].value.length
      }
    }
    function Grupo(txt, dst, formul, maximo){
      var largo
      largo = formul[txt].value.length
      if (largo > maximo){
      formul[txt].value = formul[txt].value.substring(0,maximo)
      formul[dst].value = formul[txt].value.length
      }
    }
</script>
</body>
</html>
<?php
  require_once "ClaseCriterios.php";
  $bandera="";
  $mensaje1="";
  $mensaje2="";
  $visible1="block";
  $visible2="none"; 
  $res=""; 
  $criterios = new claseCriterios();
  if (isset($_POST['Guardar']))
  {
    if($_POST['unidad']){
      $res = $criterios->insertar($_POST['unidad'], $_POST['nom_Criterio'],$_POST['porcentaje']);
      if ($res) {
            $bandera="no";
            $mensaje1="Excelente";
            $mensaje2="El registro del criterio fue realizada";
        }else{
            $bandera="no";
            $mensaje1="Algo salio mal";
            $mensaje2="El registro del criterio no fue realizada revisa los datos ingresados";
        }  
      }else{
        $bandera="no";
        $mensaje1="Algo salio mal";
        $mensaje2="Selecciona una unidad";
      }
  }
  if (isset($_POST['Registrarme'])) {
      if ($_POST['Materia']) {
          $visible1="none";
          $visible2="block"; 
      }
      else{
        $bandera="no";
        $mensaje1="Algo salio mal";
        $mensaje2="Selecciona una materia";
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
<script type="text/javascript" src="../../js/restricciones.js"></script>
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
    <li><a href="#">Alta criterios</a></li>
    <li><a href="baja.php">Baja criterios</a></li>
    <li><a href="Consulta.php">Consulta de criterios</a></li>
    <li><a href="ConsultaEs.php">Consulta criterios</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Alta de criterios</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <div style=<?php echo 'display:'.$visible1;?>>
        <form role="form" method="post" action="">
          <div class="form-group">
            <label for="Usuario">Seleccione la Materia a eliminar ingresa el criterior</label>
             <select class="form-control" name="Materia" data-style="btn-danger">  
                <option></option>
                <?php 
                  $a = $criterios->Buscar();
                ?>
                <?php foreach ($a as $row):?>
               <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php echo $row['nombre'];?>
              </option>
              <?php endforeach ?>
             </select> 
          </div>
          <button type="submit" class="btn btn-default" name="Registrarme">Registrarme</button>
        </form>
      </div>
      <div style=<?php echo 'display:'.$visible2;?>>
        <form role="form" method="post" action="">
          <div class="form-group">
            <label for="id_unidad">Seleccione una unidad:</label>
              <select class="form-control" name="unidad" data-style="btn-danger">  
                <option></option>
                <?php 
                  $a = $criterios->Buscar2($_POST['Materia']);
                ?>
                <?php foreach ($a as $row):?>
               <option multiple id="test" value=<?php echo $row['id_unidad'];?> ><?php echo $row['nombre'];?>
              </option>
              <?php endforeach ?>
             </select> 
            <label for="nom_Criterio">Nombre del criterio:</label>
            <input type="nom_Criterio" class="form-control" id="nom_Criterio" name="nom_Criterio" required="" minlength="1" maxlength="20" placeholder="Nombre del criterio: ejemplo: Programas basicos" onkeypress="return letras(event);">
            <label for="porcentaje">Porcentaje del criterio :</label>
            <input type="porcentaje" class="form-control" id="porcentaje" name="porcentaje" required="" maxlength="3" placeholder="Porcentaje del criterio: ejemplo: 25%" minlength="1" onkeypress="return algo(event);">
          </div>
          <button type="submit" class="btn btn-default"  name="Guardar">Registrar</button>
        </form>
      </div>
      
      <!--col 6-->
    </div>
    <div class="col-sm-4">
        <img src="../../img/Sin nombre.png">
      </div>
    <!--row-->
    <br>
    <br>
  </div>
  <!--container-->
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $mensaje1; ?></h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $mensaje2;?></h4>    
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>
  <br>
  </body>
  </html>
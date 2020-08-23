<?php
  require_once "ClaseUnidades.php";
  $visible="";
  $usuarios = new claseUnidades();
  $visible="none";
  $mensaje1="";
  $mensaje2="";
  $bandera="";
  if (isset($_POST['Enviar']))
  {
    if ($_POST['Materia']) {
      $visible="block";
    }else{
      $bandera="no";
      $mensaje1="Error en proceso";
       $mensaje2="verifique que alla seleccionado una materia";
    }
  }
  if (isset($_POST['Eliminar'])) {
    if ($_POST['otro']) {
        $res = $usuarios->eliminar($_POST['otro']);
        if ($res=="eliminada") {
            $bandera="no";
            $mensaje1="Excelente";
            $mensaje2="La unidad fue Eliminado con exito";
        }
        else{
          $bandera="no";
          $mensaje1="Error en registro";
          $mensaje2="verifique los datos ingresados";
        }
     }else{
        $bandera="no";
        $mensaje1="Error en proceso";
        $mensaje2="verifique que alla seleccionado una unidad";
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
    <li><a href="alta.php">Alta unidad</a></li>
    <li><a href="#">Baja unidad</a></li>
    <li><a href="Consulta.php">Consulta de unidad</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>Baja de unidad</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="POST" action="">
          <div class="form-group">
          <label for="Usuario">Seleccione la Materia:</label>
            <select class="form-control" name="Materia" data-style="btn-danger">  
            <option></option>
              <?php 
                $a = $usuarios->materia();
              ?>
              <?php foreach ($a as $row):?>
             <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php echo $row['nombre'];?>
            </option>
            <?php endforeach ?>
           </select>
        </div>
        <button type="submit" class="btn btn-default" name="Enviar">Enviar</button>
      </form>
       <div style=<?php echo 'display:'.$visible;?>>
        <form role="form" method="post" action="">
          <div class="form-group">
            <label for="Usuario">Seleccion el Nombre de la unidad a eliminar:</label>

              <select class="form-control" name="otro" data-style="btn-danger">
              <option></option>  
                <?php 
                  $a = $usuarios->get_usuarios($_POST['Materia']);
                ?>
                <?php foreach ($a as $row):?>
               <option multiple id="test" value=<?php echo $row['id_unidad'];?> ><?php echo $row['nombre'];?>
              </option>
              <?php endforeach ?>
             </select>
          </div>
          <button type="submit" class="btn btn-default" name="Eliminar">Eliminar</button>
        </form>
      </div>
    </div>
    <!--row-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
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
            <h4><?php echo $mensaje2; ?></h4>
                
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
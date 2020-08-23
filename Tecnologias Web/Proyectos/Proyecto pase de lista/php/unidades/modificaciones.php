<?php
    require_once "ClaseUnidades.php";
    $usuarios = new claseUnidades();
    $mensaje1="";
    $mensaje2="";
    $bandera="";
    $res="";
    if (isset($_POST['Buscar']))
    {
        
        $resultado = $usuarios->BuscarActualizar($_POST['id_unidad']);         
    }
    if(isset($_POST['Actualizar'])){ 
      $bandera="no";
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
    <li><a href="baja.php">Baja unidad</a></li>
    <li><a href="Consulta.php">Consulta de unidad</a></li>
    <li><a href="ConsultaEs.php">Consulta especifica</a></li>
    <li><a href="#">Modificaciones</a></li>
  </ul>
  <center>
  <h1>modificacion unidad</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_unidad">Clave de la Unidad a MODIFICAR:</label>
          <input type="number" class="form-control" id="id_unidad" name="id_unidad" required="" autofocus="" minlength="1" maxlength="20"  onkeypress="return numeros(event);" placeholder="Clave de la unidad: ejemplo: 2">
        </div>
        <button type="submit" class="btn btn-default" name="Buscar">Buscar</button>
      </form>
      <?php 
              if(isset($_POST['Buscar'])) 
              {
                 foreach ($resultado as $row):
            ?>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_unidad">Clave de la unidad:</label>
          <input type="hidden" class="form-control" id="id_unidad" name="id_unidad" value="<?php echo $row['id_unidad'];?>"> <input type="text" class="form-control" id="id_unidad" name="id_unidad" value="<?php echo $row['id_unidad'];?>"> 
          
          <label for="Usuario">sub_unidad:</label>
          <input type="text" class="form-control" id="sub_unidad" name="sub_unidad" value="<?php echo $row['sub_unidad'];?>"> 
          <label for="Usuario">Nombre de la unidad:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>">
          <label for="Usuario">Nombre de la materia:</label>
          <input type="text" class="form-control" id="nombre" name="materia" value="<?php echo $row['id_materia']; ?>">
        </div>
        <button type="submit" class="btn btn-default" name="Actualizar">Actualizar</button>
        
      <?php 
       endforeach;
             } 
             if(isset($_POST['Actualizar'])){ 
     
     $res = $usuarios-> Actualizar($_POST['id_unidad'],$_POST['materia'],$_POST['sub_unidad'],$_POST['nombre']); 
     if ($res) {
      
      $mensaje1="Excelente";
      $mensaje2="La unidad fue actualizada exitozamente";
    }else{
      
      $mensaje1="Error algo a salido mal";
      $mensaje2="La unidad no fue actualizada";
        }  
     }
      ?>
      </form>
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
  <br>
  <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $mensaje1; ?></h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $mensaje2; ?></h4>
            verfique sus datos.    
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>
  </body>
  </html>
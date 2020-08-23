
<?php
  require_once "ClaseUnidades.php";
  error_reporting(0);
  $visible="none";
  $bandera="";
  $mensaje1="";
  $mensaje2="";
  if (isset($_POST['Consultar']))
  {
    $donde = $_POST['donde'];
    $donde = $_POST['donde'];
    $usuarios = new claseUnidades();
    
    if ($_POST['que']) {
      $visible="block";
      $a_users = $usuarios->consultas_especificas($_POST['donde'],$_POST['que']);
      if ($a_users) {
        $bandera="no";  
        $mensaje1="Excelente";
        $mensaje2="La consulta fue allada";
      }else{
        $bandera="no";
        $mensaje1="Error";
        $mensaje2="Algo a salido mal la consulta no fue allada";
      }
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
    <li><a href="baja.php">Baja unidad</a></li>
    <li><a href="Consulta.php">Consulta de unidad</a></li>
    <li><a href="#">Consulta especifica</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>consulta especifica de unidad</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_calificacion">INTRODUCE lo que buscas:</label>
          <input type="id_calificacion" class="form-control" id="que" name="que" required="" autofocus="" minlength="1" maxlength="20" placeholder="Ingresa lo que deseas buscar" onkeypress="return ambos(event);">
        </div>
        <div class="form-group">
          <label for="Usuario">INTRODUCE donde lo quieres buscar buscas:</label>
          <select name="donde" class="form-control" id="donde">
            <option value="id_unidad">Clave de Unidad</option>
            <option value="id_materia">Clave de Materia</option>
            <option value="sub_unidad">sub_unidad</option>
            <option value="Nombre">Nombre de la unidad</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="Consultar">Consultar</button>
      </form>
    </div>
    <!--row-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
    <div style=<?php echo 'display:'.$visible;?>>
        <table class="table">
        <tr>
          <th>
            Clave de Unidad
          </th>
          <th>
             Clave de Materia
          </th>
          <th>
            sub unidad
          </th>
          <th>
            Nombre de unidad
          </th>
        </tr>
        <?php 
      if(isset($_POST['Consultar']))
      {
         foreach ($a_users as $row):?>
        <tr>
          <td>
    <?php echo $row['id_unidad'];?>
          </td>
          <td>
    <?php echo $row['id_materia'];?>
          </td>
          <td>
    <?php echo $row['sub_unidad'];?>
          </td>
          <td>
    <?php echo $row['nombre'];?>
          </td>
          <?php endforeach;
      }
      ?>
      </tr>
          </table>
      </div>
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
            verfique sus datos.    
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
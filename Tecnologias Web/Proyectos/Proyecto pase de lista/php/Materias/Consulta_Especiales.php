<?php
  require_once "claseMateria.php";

  $usuario = new claseMateria();
  $mensaje1="";
  $mensaje2="";
  $bandera="";
  if (isset($_POST['Consultar']))
  {
    
    $a_users = $usuario->consultas_especificas($_POST['donde'],$_POST['que']);
    if ($a_users) {
       $bandera="no";
      $mensaje1="Excelente ";
      $mensaje2="La busque de ".$_POST['que']." fue allada";
    }else{
       $bandera="no";
      $mensaje1="Algo a salido mal ";
      $mensaje2="La busque de ".$_POST['que']." no fue allada";
    }
  }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pase de lista</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
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
    <li><a href="AltaMateria.php">Alta de Materias</a></li>
    <li><a href="Baja_Materia.php">Baja Materias</a></li>
    <li><a href="Consulta.php">Consulta de Materias</a></li>
    <li><a href="#">Consulta Especifical de Materias</a></li>
    <li><a href="Modificaciones.php">Modificacion de Materias</a></li>
  </ul>
  <center>
  <h1>Consulta especifica de materia</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="Usuario">Introduce lo que buscas:</label>
          <input type="text" class="form-control" id="que" name="que" required="" minlength="1" maxlength="30" autofocus="" placeholder="Ingresa lo que quieres buscar">
        </div>
        <div class="form-group">
          <label for="Usuario">Introduce donde lo quieres buscar:</label>
          <select name="donde" class="form-control" id="donde">
            <option value="id_materia">Clava de la Materia</option>
            <option value="nombre">Nombre de la Materia</option>
            <option value="horas">Horas de la Materia</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="Consultar">Consultar</button>
       
      </form>
      <br>
      <table class="table">
      <tr>
        <th>
          Clave de la Materia
        </th>
        <th>
           Nombre de la Materia
        </th>
        <th>
           Horas de la Materia
        </th>
      </tr>
      <?php 
  if(isset($_POST['Consultar']))
  {
     foreach ($a_users as $row):?>
      <tr>
        <td>
<?php echo $row['id_materia'];?>
        </td>
        <td>
<?php echo $row['nombre'];?>
        </td>
        <td>
<?php echo $row['horas'];?>
        </td>
        <?php endforeach;
  }
  ?>
  </tr>
        </table>
      </div>
      <!--col 6-->
      <div class="col-sm-6">
        <img src="../../img/Sin nombre.png">
      </div>
      <!--col 6-->
    </div>
    <!--row-->

  </div>
  <!--container-->

<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $mensaje1;?></h3>
     </div>
         <div class="modal-body">
            <h4><?php echo $mensaje2; ?> </h4> 
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>
  </body>
  </html>
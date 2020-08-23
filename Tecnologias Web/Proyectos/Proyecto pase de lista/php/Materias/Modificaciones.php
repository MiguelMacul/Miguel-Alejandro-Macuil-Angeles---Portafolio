<?php
    require_once "claseMateria.php";
    $mensaje2="";
    $mensaje1="";
    $bandera="";
    $res="";
    $usuarios = new claseMateria();
    if (isset($_POST['Buscar']))
    {
        $res = $usuarios->BuscarActualizar($_POST['Materia']);

             
    }
    if(isset($_POST['actual']))
             {
          $resultadp = $usuarios->Actualizar($_POST['Clave'],$_POST['Modulo'],$_POST['Horario']);
         if($resultadp=="Bien"){
           $bandera="no";
            $mensaje1="Excelente";
             $mensaje2="La Modificacion fue realizada con exito";
           }else{
              $bandera="no";
              $mensaje1="Error en Actualizacion";
              $mensaje2="Modificacion alguno de los campos para actualizar";
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
  <script src="jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/maqueta.css">
  <script type="text/javascript" src="../../js/restricciones.js"></script>
  <script type="text/javascript" src="../../js/restricciones.js"></script>
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
    <li><a href="Consulta_Especiales.php">Consulta Especifical de Materias</a></li>
    <li><a href="Modificaciones.php">Modificacion de Materias</a></li>
  </ul>
  <center>
  <h1>Modificaciones</h1>
  </center>
  <div class="row">
    <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-6">
          <form role="form" method="post" action="">
            <div class="form-group">
              <label for="materia">Seleccione la Materia a modificar:</label>
                 <select class="form-control" name="Materia" data-style="btn-danger">  
                <?php 
                  $a = $usuarios->get_usuarios();
                ?>
                <?php foreach ($a as $row):?>
               <option multiple id="test" value=<?php echo $row['id_materia'];?> ><?php echo $row['nombre'];?>
              </option>
              <?php endforeach ?>
             </select>
            </div>
            <button type="submit" class="btn btn-default" name="Buscar">Buscar</button>
          </form>
          <?php 
              if(isset($_POST['Buscar'])) 
              {
                 foreach ($res as $row):
            ?>
          <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="id_materia">Clave de la Materia:</label>
               <input type="text" class="form-control" minlength="3" maxlength="20" required="" autofocus="" onkeypress="return numeros(event);" id="materia" name="Clave" value=<?php echo $row['id_materia'];?>>
               <label for="nombre">Nombre de Materia:</label>
              <input type="text" required="" class="form-control" id="nombre" name="Modulo" onkeypress="return letras(event);"  minlength="3" maxlength="20" value=<?php echo $row['nombre'];?>> 
              <label for="horas">Horas  de la Materia:</label>
              <input type="number" onkeypress="return numeros(event);" minlength="3" maxlength="20" required="" class="form-control" id="horas" name="Horario" value=<?php echo $row['horas'];?>>
            </div>
            <button type="submit" class="btn btn-default" name="actual">Actualizar</button>
          </form>
          <?php endforeach;
             }  
          ?>

        </div>
        <!--col6-->
        <!--row-->
        <div class="col-sm-6">
          <img src="../../img/Sin nombre.png">
        </div>
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
            <h4><?php echo $mensaje2; ?></h4>
              
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>

  </body>
  </html>
  
<?php
  require_once "ClaseCriterios.php";
  error_reporting(0);
  $visible="none";
  $objeto=new claseCriterios();
  if (isset($_POST['consultar'])) {
    if ($_POST['que']) {
       $resultado=$objeto->consultas_especificas($_POST['que'],$_POST['donde']);
        $visible="block";
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
    <li><a href="alta.php">Alta criterios</a></li>
    <li><a href="baja.php">Baja criterios</a></li>
    <li><a href="Consulta.php">Consulta de criterios</a></li>
    <li><a href="#">Consulta especifica</a></li>
    <li><a href="modificaciones.php">Modificaciones</a></li>
  </ul>
  <center>
  <h1>consulta especial de criterios</h1>
  </center>
  <div class="row">
    <div class="col-sm-6">
      </br></br></br></br>
      <form role="form" method="post" action="">
        <div class="form-group">
          <label for="id_criterio">INTRODUCE lo que buscas:</label>
          <input type="text" class="form-control" id="que" name="que" autofocus="" required="" maxlength="20" minlength="1" placeholder="Ingresa lo que deseas buscar" onkeypress="return diferente(event);">
        </div>
        <div class="form-group">
          <label for="Usuario">INTRODUCE donde lo quieres buscar buscas:</label>
          <select name="donde" class="form-control" id="donde">
            <option value="id_criterio">Clave de criterio</option>
            <option value="id_unidad">Clave de unidad</option>
            <option value="nom_Criterio">Nombre de criterio</option>
            <option value="porcentaje">Porcentaje de criterio</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="Consultar">Consultar</button>
      </form>
    </div>
    <!--col6-->
    <div class="col-sm-4">
      <img src="../../img/Sin nombre.png">
    </div>
    <!--col 6-->
    <div style=<?php echo 'display:'.$visible;?>>
        <table class="table">
        <tr>
          <th>
            Clave de Criterio
          </th>
          <th>
            Clave de Unidad
          </th>
          <th>
            Nombre del Criterio
          </th>
          <th>
            Porcentaje de criterio
          </th>
        </tr>
        <?php 
     

         foreach ($resultado as $row):?>
        <tr>
          <td>
    <?php echo $row['id_criterio'];?>
          </td>
          <td>
    <?php echo $row['id_unidad'];?>
          </td>
          <td>
    <?php echo $row['nom_Criterio'];?>
          </td>
          <td>
    <?php echo $row['porcentaje'];?>
          </td>
          <?php endforeach;?>
          </tr>
          </table>
      </div>
    </div>
    <!--row-->
    <br>
    <br>
  </div>
  <!--container-->
  <br>
  <script type="text/javascript">
    function diferente(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[A-Za-zñÑ0-9%-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
  </script>
</body>
  </html>
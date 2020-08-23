<html>

    <head>    
        <title>Universidad Politécnica de Tlaxcala</title>
        <meta charset="utf-8">
                 <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/maqueta.css')?>">
        <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
        <link type="text/css" rel="stylesheet"  href="<?=base_url('assets/css/normalize.css')?>">
        <link rel="shortcut icon" href="http://uptlax.edu.mx/wp-content/uploads/2019/08/FAVICON-Web-1-Color.png">
    </head>
    <body>
        <div class="contenedo">
            <div class="Hero">
                <div class="Hero-encabezado">
                    <div id='Hero-encabezado-imagen'>
                    </div>   
                </div>
               <div class="Hero-titulos">
                    <h1 style=" ">Universidad Politécnica de Tlaxcala</h1>
                    <h2>Sistema Integral de Información </h2>   
                </div>
            </div>
            <div class='Container'>
                <div class="Menu">
                    <div class='Menu-item item-1'>
                        <div class="Menu-alumnos-item-1-imagen">
                           
                        </div>
                        <!--    <a href="<?=base_url('estudiantes/tabla/1431113313/');?>"><h6>Acta de calificaciones</-->
                        <a href="<?=base_url('estudiantes/tabla/'.$alumno);?>"><h6>Acta de calificaciones</h6></a>
                    </div>
                   <div class='Menu-item item-1'>
                        <div class="Menu-alumnos-item-1-imagen">
                            
                        </div>
                        <a href="<?=base_url('Welcome')?>"><h6>Salir</h6></a>
                    </div>
                    
                </div>
                <footer>
                    <div class="pie-pagina">
                        <p>Av Universidad Politécnica No. 1, San Pedro Xalcaltzinco, Tepeyanco, Tlax. C.P. 90180 Tel. (246) 465 1300</p>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
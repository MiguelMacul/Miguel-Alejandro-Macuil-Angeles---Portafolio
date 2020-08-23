<html>
    <?=$this->load->view('anexo/head','',TRUE)?>
    <body>
        <div class="contenedo">
            <div class="Hero">
                <div class="Hero-encabezado">
                    <div id='Hero-encabezado-imagen'>
                    </div>   
                </div>
               <div class="Hero-titulos">
                    <h1 style=" ">Universidad Politécnica de Tlaxcala </h1>
                    <h2>Sistema Integral de Información </h2>   
                </div>
            </div>
            <div class='Container'>
                <div class="">
                     <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Materia</th>
                          <th scope="col">Docente</th>
                          <th scope="col">grupos</th>
                          <th scope="col">parcial1</th>
                          <th scope="col">parcial2</th>
                          <th scope="col">parcial3</th>
                          <th scope="col">parcial4</th>
                          <th scope="col">Final</th>
                          <th scope="col">Modificacion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                               foreach($califica as $key => $datos){
                                    echo "<td>".$datos->Materia."</td>";
                                    echo "<td>".$datos->Docente."</td>";
                                    echo "<td>".$datos->grupos."</td>";
                                    echo "<td>".$datos->parcial1."%</td>";
                                    echo "<td>".$datos->parcial2."%</td>";
                                    echo "<td>".$datos->parcial3."%</td>";
                                    echo "<td>".$datos->parcial4."%</td>";
                                    echo "<td>".$datos->Final."</td>";
                                    echo "<td>".$datos->Modificacion."</td>";
                                }?>
                        </tr>
                      </tbody>
                    </table>
                        <a href="<?=base_url('estudiantes/menu/'.$alumno)?>"><input type="button" class="btn btn-primary" style='width: 10%;' value="Regresar"></a>
                    <br><br>
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
            </div>
        </div>
    </body>
</html>
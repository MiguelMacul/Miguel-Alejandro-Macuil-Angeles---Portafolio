<html>
   <?=$this->load->view('anexo/head','',TRUE)?>
    <body>
        <div class="contenedo">
            <?=$this->load->view('anexo/header','',TRUE)?>
            <div class='Container'>
                <div class="">
                        <h2 align="center">Aspirantes aceptados</h2>
                        <h3>Tecnologias de las información</h3>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Nombre completo</th>
                              <th scope="col">Carrera</th>
                              <th scope="col">Matricula</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                             <?php
                             $a=0;
                               foreach($aceptados as $key => $persona ){
                                    echo "<tr><td>".$persona->nombre." ".$persona->apellidoP." ".$persona->apellidoP."</td>";
                                    echo "<td>".$persona->carrera."</td>";
                                    $b=0;
                                     foreach($alumnos as $key => $estudiante){
                                      if($a==$b){
                                           echo "<td>".$estudiante->nomatricula."</td></tr>";
                                         }
                                         $b++;
                                     }
                                     $a++;
                                     
                               }
                              ?>

                          
                            
                          </tbody>
                        </table>

                    <a href="<?=base_url('aspirante/inscribir')?>"><input type="button" class="btn btn-primary" style='width: 10%;' value="Inscribir"></a>
                        <a href="<?=base_url('aspirante')?>"><input type="button" class="btn btn-primary" style='width: 10%;' value="Regresar"></a>
                    <br><br>    
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
            </div>
        </div>
    </body>
</html>
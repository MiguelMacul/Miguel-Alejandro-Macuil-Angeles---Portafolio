<html>
    <?=$this->load->view('anexo/head','',TRUE)?>
    <body>
        <div class="contenedo">
            <?=$this->load->view('anexo/header','',TRUE)?>
            <div class='Container'>
                <div class=""> 
                       <?= form_open('docentes/evalua/'.$docente)?>
                    <h2 align="center">Captura de calificaciones</h2>
                   
                        <div class="row">
                            <div class="col">
                                <label>Seleccione grupo</label>
                              <select id="inputState" class="form-control" name="selecion">
                                  <option>...</option>
                                 <?php
                                       foreach($materias as $key => $datos){
                                            echo "<option value=".$datos->idmateria.">".$datos->nombrem."</option>";
                                           
                                        }
                                 ?>
                              
                        
                              </select>
                            </div>
                        </div>  
                        <br>
                           <br>
                        <input type="submit" class="btn btn-primary" style='margin-left:40%; width: 10%;' value="Evaluar">
                        <a href="<?= base_url('docentes/menus/'.$docente)?>"><input type="button" class="btn btn-primary" style='width: 10%;' value="Regresar"></a>
                      <?= form_close()?>
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
            </div>
        </div>
    </body>
</html>
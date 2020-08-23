<html>
     <?=$this->load->view('anexo/head','',TRUE)?>
    <body>

      <?php
        if(isset($_POST['guardar'])){
          ?> 
            <script type="text/javascript">
                    $(document).ready(function()
                  {
                     $("#exampleModal").modal("show");
                  });
               </script>
          <?php
           }
   ?>
        <div class="contenedo">
            <?=$this->load->view('anexo/header','',TRUE)?>
            <div class='Container'>
                <br><br>
                <div class=""> 
                     <?= form_open('docentes/modificar_calificaciones/'.@$valor.'/'.$docente)?>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">N</th>
                          <th scope="col">Matricula</th>
                          <th scope="col">Nombre completo</th>
                          <th scope="col">Parcial 1</th>
                          <th scope="col">Parcial 2</th>
                          <th scope="col">Parcial 3</th>
                          <th scope="col">Parcial 4</th>
                          <th scope="col">Final</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          foreach($calificar as $key => $datos){
                             echo "<tr>";
                             echo "<td><input type='number' class='form-control' name='califica[]' value='".$datos->idcalificacion."' ></td>";
                            echo "<td>".$datos->matricula."</td>";
                            echo "<td>".$datos->nombre."</td>";
                            echo "<td><input type='number' class='form-control' name='parcial1[]' value=".$datos->parcial1."></td>";
                             echo "<td><input type='number' class='form-control' name='parcial2[]' value=".$datos->parcial2."></td>";
                              echo "<td><input type='number' class='form-control' name='parcial3[]' value=".$datos->parcial3."></td>";
                               echo "<td><input type='number' class='form-control' name='parcial4[]' value=".$datos->parcial4."></td>";
                           
                           
                          
                          ?>
                          <td><input type="number" class="form-control" disabled <?php echo "value='".$datos->total."'" ?>></td>
                      <?php  echo "</tr>";} ?>
                       
                      </tbody>
                    </table>
                     <a href="#"><input type="submit" class="btn btn-primary" name="guardar" style='margin-left:40%; width: 10%;' value="Guardar"></a>
                        <a href="<?=base_url('docentes/grupo/'.$docente)?>"><input type="button" class="btn btn-primary" style='width: 10%;' value="Regresar"></a>
                        <?= form_close()?>
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
            </div>
        </div>

                              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Excelente</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        Las calificaciones fuero actualizadas
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                  </div>
                </div>
              </div>
    </body>
</html>
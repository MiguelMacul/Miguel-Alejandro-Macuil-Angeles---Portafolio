<html>
	 
    <?=$this->load->view('anexo/head','',TRUE)?>
    <body>

      <?php
        if(isset($_POST['enviar'])){
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
                <div>
                    <h2 align='center'>Pre-registro</h2>
                  <?= form_open('aspirante/pre')?>
                   <div class="form-group">
                       <label for="input">Nombre completo</label>
                            <br>
                        <div class="row">
                            
                            <div class="col">
                                
                              <input type="text" class="form-control" placeholder="Nombre" name="nombre" required="">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Apellido paterno" name="apellidoP" required="">
                            </div>
                             <div class="col">
                              <input type="text" class="form-control" placeholder="Apellido materno" name="apellidoM" required="">
                            </div>
                        </div>
                       <br>
                        <div class="row">
                            <div class="col">
                                <label>Carrera elegida</label>
                              <select id="inputState" class="form-control" name="carrera" required="">
                                <option>...</option>
                                <option value="Tecnologias de la informacion">Tecnologias de la informacion</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Financiera">Financiera</option>
                                <option value="Mecatronica">Mecatronica</option>
                                <option value="Biotecnologia">Biotecnologia</option>
                                <option value="Quimica">Quimica</option>
                                <option value="Automotriz">Automotriz</option>
                              </select>
                            </div>
                        </div>
                       <br> 
                       
                       <label>Materias adeudadas</label><br>
                       <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="adeudadas" id="inlineRadio1" value="si" >
                          <label class="form-check-label" for="inlineRadio1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="adeudadas" id="inlineRadio2" value="no" >
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div><br><br>
                       <label>Cantidad de materias adeudadas</label><br>
                       <div class="row">
                           
                            <div class="col">
                              <input type="number" class="form-control" placeholder="Cantidad de materias adeudadas" name="cantidadmaterias">
                            </div>
                        </div>
                       <br>
                        <label>Foto de acta de nacimiento</label>
                        <input type="file" id="BSbtndanger"  class="btn btn-success" name="actaN" required="">
                        <br>
                        <br>
                        <label>Foto de CURP actualizada</label>
                        <input type="file" id="BSbtndanger" class="btn btn-success" name="curp" required="">
                        <br>
                        <br>
                        <label>Foto de comprobante de domicilio</label>
                        <input type="file" id="BSbtndanger"  class="btn btn-success" name="comprobanteD" required="">
                        <br>
                        <br>
                        <label>Foto de comprobante de estudios </label>
                        <input type="file" id="BSbtndanger" name="comprobanteE" class="btn btn-success" required="">
                        <br>
                        <br>
                        <label>Fotografía del aspirante </label>
                        <input type="file" id="BSbtndanger" name="fotoA" class="btn btn-success"  required="">
                        <br>
                        <br>
                        <label>Fotografía de la ficha de admisión</label>
                        <input type="file" id="BSbtndanger" name="Admision" class="btn btn-success" required="">
                        <br>
                        <br>
                        <label>Fotografía del formato de inscripción</label>
                        <input type="file" id="BSbtndanger" name="formatoI" class="btn btn-success" required="">
                        <br>
                        <br>
                        <h3 align="center">Salud</h3>
                        <label>¿Pasede alguna emfermedad?</label><br>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="enfermedad" id="inlineRadio1" value="si">
                              <label class="form-check-label" for="inlineRadio1">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="enfermedad" id="inlineRadio2" value="no">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div><br>
                           <label>Tipo</label>
                           <div class="row">
                                <div class="col">
                                  <input type="Text" class="form-control" placeholder="ingrese tipo de emfermedad que padece" name="tipoE">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tratamiento</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese el tratamiento medico a seguir" name="tratamientoE" ></textarea>
                            </div>
                           <label>¿Pasede alguna alegia?</label><br>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="alergia" id="inlineRadio1" value="si">
                              <label class="form-check-label" for="inlineRadio1">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="alergia" id="inlineRadio2" value="no">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div><br>
                            <label>Tipo</label>
                           <div class="row">
                                <div class="col">
                                  <input type="Text" class="form-control" placeholder="ingrese tipo de alergia que padece" name="tipoAlergia">
                                </div>
                            </div>
                            <br>
                            <h3 align="center">Emocional</h3>
                            <div class="row">
                                <div class="col">
                                    <label>¿Sufres de ansiedad?</label><br>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="ansiedad" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="ansiedad" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div><br>
                                </div>
                                <div class="col">
                                <label>¿Sufres de estrés?</label><br>
                               <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="estres" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="estres" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">No</label>
                                </div><br>
                                </div>
                                <div class="col">
                                <label>¿Sufres de depresión?</label><br>
                               <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="depresion" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="depresion" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                </div>
                            </div><br>
                             <div class="row">
                                <div class="col">
                                    <label>¿Te sientes rechazado por tu familia o tus amigos?</label><br>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="rechazoFami" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="rechazoFami" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div><br>
                                </div>
                                <div class="col">
                                <label>¿No te adaptas fácilmente a cambios?</label><br>
                               <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="cambios" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="cambios" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">No</label>
                                </div><br>
                                </div>
                                
                            </div><br>
                           <br>
                            <input type="submit" class="btn btn-primary" data-dismiss="modal"  style='margin-left:40%; width: 20%;' value="Guardar" name="enviar">
                             <a href="<?=base_url('aspirante')?>"><input type="button"  style='margin-left:10%; width: 25%;' value="regresar" class="btn btn-primary" ></a>
                        </div>
                   <?= form_close()?>
                    
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
                              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Registro completo</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        Felicidades aspirante has quedado conrrectamente registrado
                    </div>
                    <div class="modal-footer">
                     <a href="<?=base_url('aspirante')?>"> <button type="button" class="btn btn-secondary">Cerrar</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
<html>
       <?=$this->load->view('anexo/head','',TRUE)?>
    <body>
        <div class="contenedo">
           <?=$this->load->view('anexo/header','',TRUE)?>
            <div class='Container'>
                <div class="">
                        <h2 align="center">Inscripción</h2>
                        <form>
                             <div class="form-group">
                                <label >Numero de ficha</label>
                                <input type="text" class="form-control"  placeholder="5154845">
                              </div>
                              <div class="form-group">
                                <label >Texto</label>
                                <input type="text" class="form-control"  placeholder="5154845"><br>
                                <input type="text" class="form-control"  placeholder="csasd23234" disabled>
                              </div>
                        </form>
                         <input type="button" class="btn btn-primary" style='width: 10%;' value="Buscar">
                        <a  href="<?=base_url('aspirante/Aceptados')?>"><input type="button" class="btn btn-primary" style='width: 10%;' value="Regresar"></a>
                    <br><br>    
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
            </div>
        </div>
    </body>
</html>
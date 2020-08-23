<html>
       <?=$this->load->view('anexo/head','',TRUE)?>
    <body>
        <div class="contenedo">
            <?=$this->load->view('anexo/header','',TRUE)?>
            <div class='Container'>
                <div class="Menu">
                    <div class='Menu-item item-1'>
                        <div class="Menu-preregistro-item-1-imagen">
                        
                        </div>
                        <a href="<?=base_url('aspirante/pre')?>"><h6>Pre-registro</h6></a>
                    </div>
                    <div class='Menu-item item-1'>
                        <div class="Menu-preregistro-item-1-imagen">
                        
                        </div>
                        <a href="<?=base_url('aspirante/aceptados')?>"><h6>Inscripcion</h6></a>
                    </div> 
                    <div class='Menu-item item-1'>
                        <div class="Menu-preregistro-item-1-imagen">
                        
                        </div>
                        <a href="<?=base_url('Welcome')?>"><h6>Salir</h6></a>
                    </div> 
                </div>
                 <?=$this->load->view('anexo/footer','',TRUE)?>
            </div>
        </div>
    </body>
</html>
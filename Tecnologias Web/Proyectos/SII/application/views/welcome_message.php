<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
 <?=$this->load->view('anexo/head','',TRUE)?>
<body>
     <?=$this->load->view('anexo/header','',TRUE)?>
		<div class='container' >
                <div class="Menu">
                    <div class='Menu-item item-1'>
                        <div class="Menu-item-1-imagen">
                        
                        </div>
                        <a href=""><h6>Pagina Principal</h6></a>
                    </div>
                     <div class='Menu-item'>
                         <div class="Menu-item-2-imagen">
                        
                        </div>
                        <a href=""><h6>Posgrado</h6></a>
                    </div>
                     <div class='Menu-item'>
                        <div class="Menu-item-3-imagen">
                        
                        </div>
                        <a href=""><h6>Servicios para egresados</h6></a>
                    </div>
                     <div class='Menu-item'>
                           <div class="Menu-item-4-imagen">
                        
                        </div>
                        <a href=""><h6>Documentos generales</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-5-imagen">
                        
                        </div>
                        <a href=""><h6>Estancias y estadias</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-6-imagen">
                        
                        </div>
                        <a href=""><h6>Aviso de privacidad</h6></a>
                    </div>
                    <div class='Menu-item'>
                         <div class="Menu-item-7-imagen">
                        
                        </div>
                        <a href=""><h6>Requisitos de titulación</h6></a>
                    </div>
                      <div class='Menu-item'>
                         <div class="Menu-item-10-imagen">
                        
                        </div>
                        <a href="<?=base_url('aspirante')?>"><h6>Aspirante</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-8-imagen">
                        
                        </div>
                        <a href="<?=base_url('entrar/acceso');?>"><h6>Servicios para alumnos</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-9-imagen">
                        
                        </div>
                        <a href="<?=base_url('entrar/acceso');?>"><h6>Servicios para academicos</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-10-imagen">
                        
                        </div>
                        <a href=""><h6>Servicios para administrativos</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-11-imagen">
                        
                        </div>
                        <a href=""><h6>Calendarios de actividades</h6></a>
                    </div>
                     <div class='Menu-item'>
                          <div class="Menu-item-12-imagen">
                        
                        </div>
                         <a href=""><h6>Contacto</h6></a>
                    </div>
                    
                </div>
              <?=$this->load->view('anexo/footer','',TRUE)?>
         </div>
</body>
</html>
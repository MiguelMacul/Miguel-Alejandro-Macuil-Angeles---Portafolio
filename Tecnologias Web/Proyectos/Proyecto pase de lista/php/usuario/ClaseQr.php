<?php
require_once "../../phpqrcode/qrlib.php";  
	class ClaseQr{
		public $filename;
		public $dir;
		Public $matricula1;
		public function generar($matricula){
			$dir=$this->dir='temp/';
			$matricula1=$this->matricula1=$matricula;
			if(!file_exists($dir)){
				mkdir($dir);
			}
			$filename=$this->filename=$dir.'prueba.png';
			$tamanio=10;
			$lever='L';
			$frameSize=3;
			$contenido="192.168.1.200/proyectopasedelista/php/pruebas.php?matricula=".$matricula;
			QRcode::png($contenido,$filename,$lever,$tamanio,$frameSize);
		}
	}
?>
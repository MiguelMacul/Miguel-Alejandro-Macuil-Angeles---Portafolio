<?php
	$path="temp/prueba.png";
		header("Content-disposition:attachment; filename=prueba.png");
		header("Content-type: image/png");
		move_uploaded_file();
		readfile($path);
?>
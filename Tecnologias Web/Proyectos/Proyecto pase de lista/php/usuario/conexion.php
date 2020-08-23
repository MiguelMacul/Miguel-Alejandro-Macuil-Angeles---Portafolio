<?php
	require_once "config.php";
	class Conexion
	{
		protected $db;
		public function __construct()
		{
			@$this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			if ($this->db->connect_error)
			{
				echo "Fallo al conectar la bd. ". $this->db->connect_error;
				exit();
				return;
			}
			$this->db->set_charset(DB_CHARSET);
			echo "Se conecto la BD3. ";
		}
	}
?>
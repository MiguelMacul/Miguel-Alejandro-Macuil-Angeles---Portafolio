<?php 
	require_once "arreglo.php";
	if(isset($_POST['Terminar']))
	{
		$obj =new arreglo;
			foreach ($_POST['estar'] as $estar) {
				echo '<h1>'.$estar.'</h1>';
				
				$obj->mostrar("".$estar);
			}

	 }

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form role="form" method="post" action="">
	<td>
		<input type="checkbox" name="estar[]" value="black" value="esta">
	</td>
	<td>
		<input type="checkbox" name="estar[]" value="red" value="esta">
	</td>
	<center><button type="submit" class="btn btn-default" name="Terminar" value="Add color">Terminar</button></center>
</form>
</body>
</html>
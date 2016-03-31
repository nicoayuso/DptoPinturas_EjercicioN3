<h1>Datos Recibidos</h1>
<?php 
	echo "Recibidos:</br>";
	var_dump($_GET);
	echo "<br>";
	var_dump($_POST);

	echo "<br>";

	$nombre = $_POST['usuario'];
	$clave = $_POST['clave'];
	echo $nombre;
	echo "<br>";
	echo $clave;

	if ($nombre=="admin" && $clave==1234) 
	{
			include "bienvenido.html";
	}
	else
	{
		include "nologeado.html";

	}

 ?>
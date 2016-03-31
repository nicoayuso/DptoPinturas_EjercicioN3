<html>
<head>
	<title></title>
</head>
<body>
	<?php

		/*include_once "alumno.php";*/
		/* once incluye solo una vez sola. Incluye todo el archivo.*/

		/* Inlcude si no funicona devuelve un Warning
		Require si o si necesito el archivo. Mo funciona la pagina*/
		
		/*require_once "alumno.php"; */
		require "mascota.php";

		echo "Hola";
		$numero = 8;


		$nombre = "Juan";
		echo "<br>";		
		echo $nombre;
		echo "<br>";
		print("Su nombre es ".$nombre);
		
		echo "<br>";
		echo "<br>";
		
		if($numero >18)
		{
			echo "<h1>".$nombre."</h1>";
			echo "Es mayor de edad";
		}
		else
		{
			echo "<h1>".$nombre."</h1>";
			echo "Es Menor";
		}

		$miArray = array(2,4,6);

		foreach ($miArray as $elemento ) {
			echo "<br>".$elemento;
		}

		echo "<br>";
		var_dump($miArray);

		echo "<br>";
		$miNuevoArray = array("Pizza" => 20, "Coca-Cola" => 25, "Empanada" => 15);
		var_dump($miNuevoArray);

		echo "<br>";
		$arrayClaveValor = array("Nombre" => "Nicolas", "Apellido" => "Gonzalez", "Soltero" => true, "Fecha de Nacimiento" => "1983/03/27");
		var_dump($arrayClaveValor);

		$arrayVacio = array();
		echo "<br>";
		$arrayVacio[0] = "Hola";
		$arrayVacio[] = "<br>Chau";
		var_dump($arrayVacio);

		echo "<br><br>";
		$arrayVacio[]=$miNuevoArray;
		var_dump($arrayVacio);
		
		echo "<br><br>";
		$arrayVacio["Productos"] = $miNuevoArray;
		var_dump($arrayVacio);

		echo "<br><br>";
		echo $arrayVacio["Productos"]["Pizza"];
		var_dump($arrayVacio);

		echo "<br><br>";
		$miObjeto = new stdclass();
		$miObjeto->nombre="Nicolas";
		$miObjeto->apellido="Gonzalez";
		$miObjeto->soltero=true;
		$miObjeto->FechaNacimiento="27-03-1983";
		$miObjeto->Productos = $miNuevoArray;
		var_dump($miObjeto); 

		echo "<br><br>";
		
		
		$yo = new alumno();
		$yo->nombre ="Nicolas";
		$yo->apellido ="Gonzalez";
		var_dump($yo);

		$yo->Mostrar();

		$yo->soltero=true;
		alumno::MostrarEstatico($yo);

		echo "<br><br>";
		echo $yo->nombre;
		echo "<br><br>";

		foreach ($yo as $atributo) {

			var_dump($atributo);
		}

		/* Esto no funciona. NO HACER!
		echo $yo["nombre"];		
		echo $miNuevoArray->nombre = "pepe";
		*/

	?> 	 	
</body>
</html>
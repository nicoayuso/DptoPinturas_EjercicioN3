<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="Primero">
		<input type="text" name="Segundo">
		<input type="text" name="Tercero">
		<input type="submit" name="calcular" value="Calcular"> 
	</form>
	<?php

		$num1 = $_POST['Primero'];
		$num2 = $_POST['Segundo'];
		$num3 = $_POST['Tercero'];
		$mayor;

		if($num1 >= $num2 && $num1 >= $num3 )
		{
			$mayor= $num1;			
		}
		if($num2 >= $num1 && $num2 >= $num3)
		{
			$mayor = $num2;
		}
		if($num3 >= $num1 && $num3 >= $num2)
		{
			$mayor = $num3;
		}
		echo "El mayor es: ", $mayor;

	
	?>
</body>
</html>
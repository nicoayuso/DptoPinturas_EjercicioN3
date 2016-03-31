<?php
class alumno
{
	public $nombre; 
	public $apellido;

	public function Mostrar()
	{
		$this->RetornarDatos();
	} 

	private function RetornarDatos()
	{
		echo "<br><br>Su nombre es: ".$this->nombre."<br>Su apellido es: ".$this->apellido;
	}

	public static function MostrarEstatico($miAlumno)
	{
		$miAlumno->Mostrar();
	}
}
?>
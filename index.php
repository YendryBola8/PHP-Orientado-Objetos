<?php

/**
	* 
	*/
	class Persona
	{
		// Atributos
		public $nombre = "Yendry";

		// _Metodos
		public function hablar($mensaje)
		{
			echo $mensaje;
		}

	}

	$persona = new Persona();
	//echo $persona->nombre;
	$persona->hablar("Hola que tal");
?>
<?php

/**
	* 
	*/
	class Persona
	{
		// Atributos
		public $nombre = array();//"Yendry";
		public $apellido = array();//"Yendry";

		// _Metodos
		public function guardar($nombre, $apellido)
		{
			$this->nombre[] = $nombre;
			$this->apellido[] = $apellido;
		}
		public function mostrar()
		{
			for ($i=0; $i < count($this->nombre); $i++) { 
				# code...
				self::formato($this->nombre[$i], $this->apellido[$i]);
				Persona::formato($this->nombre[$i], $this->apellido[$i]);
				$this->formato($this->nombre[$i], $this->apellido[$i]);
			}
		}

		public function formato($nombre, $apellido)
		{
			echo "Nombre: ".$nombre." Apellido: ".$apellido;
		}

	}

	$persona = new Persona();
	$persona->guardar("1234 sdfgsdg","dgseyrfgwerg 564684");
	$persona->guardar("1234 sdfgsdg","dgseyrfgwerg 564684");
	$persona->guardar("1234 sdfgsdg","dgseyrfgwerg 564684");
	$persona->guardar("1234 sdfgsdg","dgseyrfgwerg 564684");
	$persona->guardar("1234 sdfgsdg","dgseyrfgwerg 564684");
	$persona->guardar("1234 sdfgsdg","dgseyrfgwerg 564684");
	$persona->mostrar();
?>
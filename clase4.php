<?php

/**
	* 
	*/
	class Loteria
	{
		// Atributos
		public $numero;
		public $intentos;
		public $resultado = false;

		// _Metodos
		public function __construct($numero, $intentos)
		{
			$this->numero = $numero;
			$this->intentos = $intentos;
		}

		public function sortear()
		{
			$minimo = $this->numero / 2;
			$maximo = $this->numero * 2;

			for ($i=0; $i < $this->intentos; $i++) { 
				# code...
				$int = rand($minimo, $maximo);
				self::intentos($int);
			}
		}
		
		public function intentos($int)
		{
			if($int == $this->numero)
			{
				echo "<b>".$int." == ".$this->numero."</b><br>";
				$this->resultado = true;
			}else{
				echo $int." != ".$this->numero."<br>";
			}
		}

		public function __destruct()
		{
			if($this->resultado)
			{
				echo "Felicidades, has ganado en: ".$this->intentos." intentos.";
			}else{
				echo "Que  lastima, has perdiodo en: ".$this->intentos." intentos.";
			}
		}
	}

	$loteria = new Loteria(10, 5);
	$loteria->sortear();
?>
<?php 
	namespace Cantores\TripHop;

	class James{
		private $musica;

		public function __construct($musica){
			$this->musica = $musica;
		}

		public function dizOi(){
			return 'Oi eu sou o James Blunt, eu canto a musica '.$this->musica.'.';
		}
	}
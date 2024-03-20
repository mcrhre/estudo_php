<?php 
	namespace Cantores\HeavyMetal;

	class James{
		private $musica;

		public function __construct($musica){
			$this->musica = $musica;
		}

		public function dizOi(){
			return 'Oi eu sou o James Hetfield, eu canto a musica '.$this->musica.'.';
		}
	}
<?php
	namespace Cantores\Funk;
	
	include_once('James1.php');
	include_once('James2.php');

	use Cantores\TripHop\James as Blunt;
	use Cantores\HeavyMetal\James as Hetfield;
	
	class James{
		private $musica;

		public function __construct($musica){
			$this->musica = $musica;
		}

		public function dizOi(){
			return 'Oi eu sou o James Brown, eu canto a musica '.$this->musica.'.';
		}
	}
	
	$james_blunt = new Blunt('Same Mistake');
	echo $james_blunt->dizOi();

	echo '<br />';

	$james_hetfield = new Hetfield('Mama Said');
	echo $james_hetfield->dizOi();
	
	echo '<br />';

	//$james_brown = new James('I Feel Good');
	//echo $james_brown->dizOi();

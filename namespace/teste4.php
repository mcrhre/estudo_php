<?php
	include_once('James1.php');
	include_once('James2.php');
	include_once('James4.php');
	
	use Cantores\{
		TripHop\James as Blunt,
		HeavyMetal\James as Hetfield,
		function Rock\James as Bay
	};
	
	//use function Cantores\Rock\James as Bay;

	$james_blunt = new Blunt('Same Mistake');
	echo $james_blunt->dizOi();

	echo '<br />';

	$james_hetfield = new Hetfield('Mama Said');
	echo $james_hetfield->dizOi();
	
	echo '<br />';

	echo Bay('Hold Back The River');

<?php
	include_once('James1.php');
	include_once('James2.php');

	use Cantores\TripHop\James as Blunt;
	use Cantores\HeavyMetal\James as Hetfield;

	$james_blunt = new Blunt('Same Mistake');
	echo $james_blunt->dizOi();

	echo '<br />';

	$james_hetfield = new Hetfield('Mama Said');
	echo $james_hetfield->dizOi();

<?php
	include_once('James1.php');
	include_once('James2.php');

	$james_blunt = new Cantores\TripHop\James('Same Mistake');
	echo $james_blunt->dizOi();

	echo '<br />';

	$james_hetfield = new Cantores\HeavyMetal\James('Mama Said');
	echo $james_hetfield->dizOi();

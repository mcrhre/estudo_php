<?php

	class Teste{

		public static $contador;

		function __construct(){

			self::$contador++;

		}

	}

	$t1 = new Teste();
	$t2 = new Teste();

	echo Teste::$contador;

<?php
	class aclass {
		function anonstatic() {
			echo 'non static';
		}

		static function astatic() {
			echo 'static';
		}
	}

	$aobj = new aclass();

	aclass::anonstatic();
	//it works.
	
	echo '<br>';
	
	$aobj->astatic();
	//it works too.

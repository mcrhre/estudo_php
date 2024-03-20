<?php

$object1_orig = new stdClass();
$object2_copy = $object1_orig;
$object3_clon = clone $object1_orig;

$object1_orig->content = 'Ciao';

var_dump($object1_orig);
 // Outputs object(stdClass)#1 (1) { ["content"]=> string(4) "Ciao" }
var_dump($object2_copy);
 // Outputs object(stdClass)#1 (1) { ["content"]=> string(4) "Ciao" }
var_dump($object3_clon);
 // Outputs object(stdClass)#2 (0) { }

echo '<br>-------------------<br>';

$object2_copy->content = 'Ciao Copy';

var_dump($object1_orig);
 // Outputs object(stdClass)#1 (1) { ["content"]=> string(9) "Ciao Copy" }
var_dump($object2_copy);
 // Outputs object(stdClass)#1 (1) { ["content"]=> string(9) "Ciao Copy" }
var_dump($object3_clon);
 // Outputs object(stdClass)#2 (0) { }
 
echo '<br>-------------------<br>';

$object3_clon->content = 'Ciao Clone';

var_dump($object1_orig);
 // Outputs object(stdClass)#1 (1) { ["content"]=> string(9) "Ciao Copy" }
var_dump($object2_copy);
 // Outputs object(stdClass)#1 (1) { ["content"]=> string(9) "Ciao Copy" }
var_dump($object3_clon);
 // Outputs object(stdClass)#2 (1) { ["content"]=> string(10) "Ciao Clone" }
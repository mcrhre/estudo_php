<?php
spl_autoload_register(function ($class_name) {
    include __DIR__ . DIRECTORY_SEPARATOR . $class_name . '.php';
});


$obj  = new MyClass1();
$obj2 = new MyClass2();

echo $obj->teste();
echo '<br>';
echo $obj2->teste();
?>
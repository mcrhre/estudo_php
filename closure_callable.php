<?php
//so aceita funcoes anonimas
function callFunc1(Closure $closure) {
    $closure();
}

//aceita funcoes anonimas e normais
function callFunc2(Callable $callback) {
    $callback();
}

//funcao normal
function xy() {
    echo 'Hello, World! <br>';
}

callFunc1("xy"); // Catchable fatal error: Argument 1 passed to callFunc1() must be an instance of Closure, string given
callFunc2("xy"); // Hello, World!

//funcao anonima
$xy = function() {
    echo 'Hello, World! <br>';
};

callFunc1($xy); // Hello, World!
callFunc2($xy); // Hello, World!
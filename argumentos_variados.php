<?php
function soma()
{
    $parametros = func_get_args();
	$soma = 0;
    foreach ($parametros as $parametro)
    {
        $soma += $parametro;
    }
    return $soma;
}

//PHP 5.6+ 
function soma2(...$parametros)
{
	$soma = 0;
    foreach ($parametros as $parametro)
    {
        $soma += $parametro;
    }
    return $soma;
}

echo soma(1, 2) . "<br>";
echo soma(1, 2, 3) . "<br>";
echo soma(1, 2, 3, 4, 5, 6) . "<br>";

echo '<hr>';

echo soma2(1, 2) . "<br>";
echo soma2(1, 2, 3) . "<br>";
echo soma2(1, 2, 3, 4, 5, 6) . "<br>";

?>
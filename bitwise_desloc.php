<?php
$a = 75;
$b = 5;

echo 'Deslocamento a direita: (divide) <br>';
//cada volta divide por 2
for ($i=0; $i <= $b; $i++):

    var_dump( $a >> $i ); 
    
endfor;

echo 'Deslocamento a esquerda: (multiplica) <br>';
//cada volta multiplica por 2
for ($i=0; $i <= $b; $i++):

    var_dump( $a << $i ); 
    
endfor;
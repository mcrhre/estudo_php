<?php
 function teste($nome, $callback){
     call_user_func($callback, $nome);
 }
 
 teste('moacir', function($nome_return){
     echo $nome_return;
 });
 
 /*
 function teste2($nome_return){
	echo $nome_return;
 }
 */
 
 //teste('moacir', 'teste2');
 
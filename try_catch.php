<?php
   //Uma função que lança uma exceção
   function checkNum($number) {
       if($number>1) {
           throw new Exception("O valor deve ser 1 ou menos");
       }
       return true;
   }
   
  //Inicia a exceção centro de um bloco try
  try {
      checkNum(2);
      //Se a exceção acontecer você não verá esta mensagem
      echo 'Se você ver esta mensagem'
              .'o número é 1 ou menos';
  }
  catch(Exception $e){
      echo 'Mensagem: ' .$e->getMessage();
  }
?>
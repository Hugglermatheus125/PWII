<?php

   $idade = 16;
   $faixa;

   if ($idade <= 12) {
    $faixa = "criança";
   }else if ($idade <= 17){
    $faixa = "adolescente";
   }else if ($idade <= 60){
    $faixa = "adulto";
   }else{
    $faixa = "idoso";
   }

   echo $faixa;

?>
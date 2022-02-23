<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

echo "Fecha y Hora actual   " . date("d/m/Y H:i") . "<br><br>"; 


$hr = date("H");
$min = date("i");

$hr = 23;
$min = 10;

echo "La hora es $hr:$min hs. <br>";

for ($i=0; $i < 60; $i++) { 
  echo "La hora es " . (($hr >= 0 && $hr <= 9) ? "0$hr" : $hr) . ":" . (($min >= 0 && $min <= 9) ? "0$min" : $min) . "<br>";
  $min++;
  if($min == 60){
      $min = 0;
      $hr++;
  }
  if($hr == 24){
      $hr=0;
  }
}

echo "La hora es ". (($hr >= 0 && $hr <= 9)? "0$hr" : $hr)  .":" . (($min >= 0 && $min <= 9)? "0$min" : $min) .  "<br>";

?>
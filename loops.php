<?php
$i = 1;

while($i <= 10){
  echo $i . "\n";
  $i++;
}

do{
   echo $i . "\n";
  $i++;
}while($i <= 5);

$num = 1;
for($c = 0; $c <= 10; $c++){
   echo $c . "\n";
}

$frutas = array("maçã", "banana", "laranja");

foreach ($frutas as $fruta) {
    echo $fruta;
}

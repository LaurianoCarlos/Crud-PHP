<?php

function exibir_mensagem() : void {
    echo "Olá, mundo!\n";
}

function soma($x, $y){

  return $x + $y;
}

exibir_mensagem();
$res = soma(5,5) . "\n";

echo $res;
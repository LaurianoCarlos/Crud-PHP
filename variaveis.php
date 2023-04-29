<?php

//gettype retorna o tipo de dado da variavel
$idade = 30;
echo gettype($idade) . "\n";
  
$preco = 12.50;
echo gettype($preco) . "\n"; // saída: double

$nome = "Maria";
echo gettype($nome) . "\n";; // saída: string

$ativo = true;
echo gettype($ativo) . "\n";; // saída: boolean

$frutas = array("maçã", "banana", "laranja");
echo gettype($frutas) . "\n";; // saída: array


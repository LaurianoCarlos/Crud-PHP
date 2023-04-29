<?php
$a = 10;
$b = 5;

// Operadores aritméticos
echo $a + $b; // saída: 15
echo $a - $b; // saída: 5
echo $a * $b; // saída: 50
echo $a / $b; // saída: 2
echo $a % $b; // saída: 0

// Operadores de comparação
echo $a == $b; // saída: false
echo $a != $b; // saída: true
echo $a > $b; // saída: true
echo $a < $b; // saída: false
echo $a >= $b; // saída: true
echo $a <= $b; // saída: false

// Operadores lógicos
echo ($a > 0 && $b < 10); // saída: true
echo ($a == 5 || $b == 10); // saída: true
echo !($a == $b); // saída: true

// Operadores de atribuição
$c = 2;
$c += 3; // é o mesmo que $c = $c + 3;
echo $c; // saída: 5

// Operadores de incremento/decremento
$d = 5;
echo ++$d; // saída: 6
echo --$d; // saída: 5

// Operadores de concatenação
$nome = "João";
$sobrenome = "Silva";
echo $nome . " " . $sobrenome; // saída: "João Silva"

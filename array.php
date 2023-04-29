<?php
//count: retorna o número de elementos em um array.
$array = array(1, 2, 3, 4, 5);
echo count($array); // saída: 5

//sort: ordena os elementos de um array em ordem crescente.
$array = array(3, 1, 4, 2, 5);
sort($array);
print_r($array); // saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

//rray_push: adiciona um ou mais elementos ao final de um array.
$array = array(1, 2, 3);
array_push($array, 4, 5);
print_r($array); // saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

//array_pop: remove o último elemento de um array.
$array = array(1, 2, 3);
array_pop($array);
print_r($array); // saída: Array ( [0] => 1 [1] => 2 )

//array_shift: remove o primeiro elemento de um array.
$array = array(1, 2, 3);
array_shift($array);
print_r($array); // saída: Array ( [0] => 2 [1] => 3 )

//array_unshift: adiciona um ou mais elementos ao início de um array.
$array = array(1, 2, 3);
array_unshift($array, 0, -1);
print_r($array); // saída: Array ( [0] => 0 [1] => -1 [2] => 1 [3] => 2 [4] => 3 )

//array_slice: retorna uma parte de um array, a partir de uma determinada posição.
$array = array(1, 2, 3, 4, 5);
$sub_array = array_slice($array, 2, 2);
print_r($sub_array); // saída: Array ( [0] => 3 [1] => 4 )

//array_merge: mescla dois ou mais arrays em um único array.
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$array3 = array_merge($array1, $array2);
print_r($array3); // saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )




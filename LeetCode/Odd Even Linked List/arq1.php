<?php

$matriz = [4,3,2,7,8,0,8,2,3,1];
$array = [];

$x = array_count_values($matriz); //armazeno em x os valores e suas frequencias em que se repetem no array
foreach ($x as $key => $value) {
	if($value == 2){
		array_push($array, $key); //guardo somente os que se repetem duas vezes no array
	}
}
print_r($array); //imprime o array
?>
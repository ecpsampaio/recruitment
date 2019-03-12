<?php

$matriz = [4,3,2,7,8,0,8,2,3,1];
$array = [];

$x = array_count_values($matriz);
foreach ($x as $key => $value) {
	if($value == 2){
		array_push($array, $key);
	}
}
print_r($array);
?>
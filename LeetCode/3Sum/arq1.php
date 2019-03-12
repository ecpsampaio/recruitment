<?php

$matriz = [-1, 0, 1, 2, -1, -4];
$array = [];

for ($i=0; $i < count($matriz)-2; $i++) { 
	for ($j=$i + 1; $j <count($matriz)-1; $j++) { 
		for ($k=$j+1; $k < count($matriz); $k++) { 
			if($matriz[$i] + $matriz[$j] + $matriz[$k] == 0){
				$array[] = array($matriz[$i],$matriz[$j],$matriz[$k]);
			}
		}
	}
}
print_r($array);

?>
<?php

$matriz = [1,2,5,1,5,6,7,9,4,4,1,1,1,2,3,3];
$elemento = 1;

foreach ($matriz as $key => $value) {
	if($elemento == $value){
		unset($matriz[$key]);
	}
}

echo "Tamanho do array após a exclusão: ".(sizeof($matriz))."</br>";
echo "Primeiro elemento do array: " .(current($matriz)). ".";
?>
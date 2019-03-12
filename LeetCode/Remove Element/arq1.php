<?php

$matriz = [1,2,5,1,5,6,7,9,4,4,1,1,1,2,3,3];
$elemento = 1;

foreach ($matriz as $key => $value) {
	if($elemento == $value){ //comparo o elemento a ser retirado com o que estar no array
		unset($matriz[$key]); //elimino do array com a função UNSET
	}
}

echo "Tamanho do array após a exclusão: ".(sizeof($matriz))."</br>"; //impirmo o tamanho atual do array
echo "Primeiro elemento do array: " .(current($matriz)). "."; //imprimo o valor atual (primeiro) do array
?>
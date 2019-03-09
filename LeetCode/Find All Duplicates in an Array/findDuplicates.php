<?php
/* 
*	Aqui eu crio um array vazio
*/
$arrayNumber = array();
/* 
*	Populo o array com 10 números com valores de 0 a 50
*/
for ($i=0; $i < 10 ; $i++)
	array_push($arrayNumber, rand(0, 50));
/* 
*	Imprimo os valores gerados para a comparação
*/
echo "Números gerados. <br>";
foreach ($arrayNumber as $key => $value)
	echo "{$value} ";
/* 
*	Procuro se no array existe valores duplicados
*/
$duplicate = array_diff_assoc($arrayNumber, array_unique($arrayNumber));
/* 
*	Imprimo os valores repetidos
*/
echo "<br>Número(s) repetido(s). <br>";
foreach ($duplicate as $key => $value) {
	echo "{$value} ";
}
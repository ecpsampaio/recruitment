<?php
/* 
*	Aqui eu crio um array vazio
*/
$arrayNumber = array();
/* 
*	Populo o array com 10 números com valores de 0 a 100
*/
for ($i=0; $i < 10 ; $i++)
	array_push($arrayNumber, rand(0, 100)); // Gero 10 números com valores até 100 randomicamente
/* 
*	Percorro o array e faço as comparações
*	Se o resto da divisão por 3 for zero, Fizz
*	Se o resto da divisão por 5 também for zero, então FizzBuzz
*	Se o resto da divisão por 5 e 3 não for zero, imprimo o valor
*/
foreach ($arrayNumber as $key => $value):
	if ($value % 3 == 0):
		if ($value % 5 == 0):
			echo "FizzBuzz <br>";
		else:
			echo "Fizz <br>";
		endif;
	elseif ($value % 5 == 0):
		echo "Buzz <br>";
	else:
		echo "{$value} <br>";
	endif;
endforeach;
<?php

$string = 'babad';
$arr1 = str_split($string); //transforma a string em array

$tamArray = sizeof($arr1);
$stringConcat = "";
$arrayPolindrome = []; //array das strings polindromicas


for ($i=0; $i <=$tamArray-1; $i++) { 
	$stringConcat = $stringConcat.$arr1[$i]; //pego o primeiro caracter para poder concatenar com os próximos
	if (strlen($stringConcat) != 1){ //verifico se é diferente de um
		if(strrev($stringConcat) == $stringConcat){ // uso a função strrev para comparar o inverso da string com a string atual
			array_push($arrayPolindrome, $stringConcat); //se forem iguais, adiciono em um array.
		}else{
			$stringConcat = "";
		}
	}
	for ($j=$i+1; $j <=$tamArray-2; $j++) {  //crio um segundo laço, para percorrer a partir do segundo caracter, e formar as novas strings.
		$stringConcat = $stringConcat.$arr1[$j];
		if (strlen($stringConcat) != 1){
			if(strrev($stringConcat) == $stringConcat){
				array_push($arrayPolindrome, $stringConcat);
			}
		}
	}
}
print_r($arrayPolindrome); //imprimindo array
$max = 0;
$result =  "";

//laço de repetição para armazenas a maior string
for ($i=0; $i < count($arrayPolindrome); $i++) { 
	if ($max < strlen($arrayPolindrome[$i])) {
		$max = strlen($arrayPolindrome[$i]);
		$result = $arrayPolindrome[$i];
	}
}

print_r($result); //imprimindo a maior string

?>
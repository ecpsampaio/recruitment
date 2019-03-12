<?php

$string = 'babad';
$arr1 = str_split($string);

$tamArray = sizeof($arr1);
$stringConcat = "";
$arrayPolindrome = []; //array das strings polindromicas


for ($i=0; $i <=$tamArray-1; $i++) { 
	$stringConcat = $stringConcat.$arr1[$i];
	if (strlen($stringConcat) != 1){
		if(strrev($stringConcat) == $stringConcat){
			array_push($arrayPolindrome, $stringConcat);
		}else{
			$stringConcat = "";
		}
	}
	for ($j=$i+1; $j <=$tamArray-2; $j++) { 
		$stringConcat = $stringConcat.$arr1[$j];
		if (strlen($stringConcat) != 1){
			if(strrev($stringConcat) == $stringConcat){
				array_push($arrayPolindrome, $stringConcat);
			}
		}
	}
}
print_r($arrayPolindrome);
$max = 0;
$result =  "";

for ($i=0; $i < count($arrayPolindrome); $i++) { 
	if ($max < strlen($arrayPolindrome[$i])) {
		$max = strlen($arrayPolindrome[$i]);
		$result = $arrayPolindrome[$i];
	}
}

print_r($result);

/*
if(strrev($string) == $string){
	echo "Polindrome";
	echo "</br>";
	echo "A palavra ".$string." equivale ao seu inverso";
} elseif (condition) {
	
}else{
	echo "A palavra ".$string." não equivale ao seu inverso";
}*/
?>
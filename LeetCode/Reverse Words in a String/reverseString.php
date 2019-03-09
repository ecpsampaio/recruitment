<?php

/*
	Possível valor vindo de uma API, DB ou Form
*/
$s = "the sky is blue";
/*
	Separo as palavras e as armazeno em um array
*/
$words = explode(' ', $s);
/*
	Faço a junção com o auxílio da função nativa que inverte um array
*/
$reverseWord = implode(' ', array_reverse($words));
/*
	Imprimo para o usuário
*/
echo $reverseWord;
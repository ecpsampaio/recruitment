<?php
  include("../exibearray.php");

  $word = "arara";

  function reverseString($string){
    $stringDividida = str_split($string); //Divide a palavra inicial num array
    $arrayResultante = array();  //Criação da variável array resultante
    for($i = strlen($string); $i >= 0; $i-- ){  //Percorre a string dividida na ordem decrescente ao mesmo tempo que preeneche o array resultante
      $arrayResultante[] = $stringDividida[$i];
    }
    return implode($arrayResultante);  //Retorna o array resultante já reverso
  }
  echo "<h1>String inicial: $word</h1>"; //Exibe os textos no navegador
  $reversed = reverseString($word); //Guarda a palavra reversa na variável reversed
  echo "<h1>String revertida: $reversed</h1>";
 ?>

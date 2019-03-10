<?php
  include("../exibearray.php");

  $word = "passarinho";

  function reverseString($string){
    $stringDividida = str_split($string);
    $arrayResultante = array();
    for($i = strlen($string); $i >= 0; $i-- ){
      $arrayResultante[] = $stringDividida[$i];
    }
    return implode($arrayResultante);
  }
  echo "<h1>String inicial: $word</h1>";
  $reversed = reverseString($word);
  echo "<h1>String revertida: $reversed</h1>";
 ?>

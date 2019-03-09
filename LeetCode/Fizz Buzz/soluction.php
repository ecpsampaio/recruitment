<?php

  $array = array(); //Criação de array
  for($i=1; $i<21; $i++){ //Povoação do array com 20 posições
    $array[] = $i;
  }

  foreach ($array as $value) {
    if($value % 3 == 0){
      echo "Fizz <br>";
    }
    elseif ($value % 5 == 0) {
      echo "Buzz <br>";
    }
    else {
      echo "$value<br>";
    }
  }
 ?>

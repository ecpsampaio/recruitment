<?php
  echo "<h3>Dada uma sequência de números de 1 a n imprima: <br> 'Fizz' para números
  múltiplos de 3, 'Buzz' para múltiplos de 5 e 'FizzBuzz' para múltiplos de 3 e 5</h3> <hr>";

  for($i=1; $i<21; $i++){
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz <br>";
    }elseif ($i % 3 == 0) {
       echo "FIZZ <br>";
    }elseif ($i % 5 == 0) {
      echo "BUZZ <br>";
    }
    else{
      echo "$i <br>";
    }
  }
?>

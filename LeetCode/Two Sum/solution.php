<?php
  include("../exibearray.php");
  $arraynum = array(5,7,0,3);
  $result = 8;
  $tamanhoarray = count($arraynum);

  echo "Dado um array de tamanho $tamanhoarray cujo os valores são: ";
  exibeArray($arraynum);
  echo "retorne o índice onde a soma de dois valores totaliza  $result <br><br>";
  for($i = 0; $i < $tamanhoarray; $i++){
    for($j = 1; $j < $tamanhoarray; $j++ ){
      $resultProvisorio = ($arraynum[$i] + $arraynum[$j]);
      if($resultProvisorio == $result){
        echo "O índice correspondente aos fatores dessa soma são [$i] => $arraynum[$i] e [$j] => $arraynum[$j] , pois
              $arraynum[$i] + $arraynum[$j] = $result";
      }
    }
  }

 ?>

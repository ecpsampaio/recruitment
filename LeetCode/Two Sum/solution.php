<?php
  include("../exibearray.php");  //Chamada da função exibeArray
  $arraynum = array(5,7,0,3); //Criação do array
  $result = 8;  //criação do resultado
  $tamanhoarray = count($arraynum);  //Tamanho do array


  echo "Dado um array de tamanho $tamanhoarray cujo os valores são: ";
  exibeArray($arraynum);
  echo "retorne o índice onde a soma de dois valores totaliza  $result <br><br>";
  for($i = 0; $i < $tamanhoarray; $i++){
    for($j = 1; $j < $tamanhoarray; $j++ ){
      $resultProvisorio = ($arraynum[$i] + $arraynum[$j]); //Se array na posiçao i + array na posição J for ifgual a resultado
      if($resultProvisorio == $result){
        echo "O índice correspondente aos fatores dessa soma são [$i] => $arraynum[$i] e [$j] => $arraynum[$j] , pois
              $arraynum[$i] + $arraynum[$j] = $result";
      }
    }
  }

 ?>

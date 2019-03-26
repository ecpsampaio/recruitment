<?php
  $a = "abcd";
  $b = "abcde";

  $vetA = str_split($a); //Divide a string
  $vetB = str_split($b); //Divide a string

  function excedentesArray($maiorArray, $menorArray){ //Função procura o excedente entre os arrays
    $valoresExcedentes = array();
    foreach ($maiorArray as $key => $value){ //Percorre o maior array
      if( !in_array($value, $menorArray) ){ //verifica se o valor encontrado não está no menor array
        $valoresExcedentes[] = $value;  //Se verdadeiro salva no array $valoresExcedentes
      }
    }
    return $valoresExcedentes;
  }

  function exibeArray($array){
    foreach ($array as $value){
      echo $value;
    }
  }

  echo "<h1>Dados dois arrays de strings a saber</h1>  <p> Primeiro: '$a' <br><br> Segundo: '$b'</p>";
  if( count($vetA) > count($vetB) ){ //Seleciona o maior array e o percorre
    echo "O valor excedente entre os arrays é: ";
    exibeArray(excedentesArray($vetA, $vetB)); //Exibe Array chama Excedente array e passa o valor excedente
  }else {  //Senão
    echo "O valor excedente entre os arrays é: ";
    exibeArray(excedentesArray($vetB, $vetA));
  }
?>

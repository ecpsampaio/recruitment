<?php
  $array = array(); //Criação de array
  for($i=0; $i<21; $i++){ //Povoação do array com 20 posições
    $array[] = $i;
  }
  $indices = count($array); //Conta quantos índices o array possui
  $indiceSorteado = rand(0, $indices - 1); //Sorteia um índice aleatório a partir da quantidade de índices daquele array
  $PosRestantes = $indices-$indiceSorteado; //Aponta as posições que restam para o fim do array
  $indiceExibicao = $indices-1;
  echo "<h1>Array gerado em ordem crescente de 0 a $indiceExibicao</h1>";
  foreach ($array as  $value){ //Percorro e exibo o array gerado
    echo "$value, ";
  }
  echo "<h1>Após o sorteio do Pivot {$array[$indiceSorteado]} o array é dividido em 2 a saber: </h1>";
  $primeiro_array = array_slice($array, $indiceSorteado,$PosRestantes); //Separação da primeira metade a partir do indice sorteado
  $segundo_array = array_slice($array, 0, $indiceSorteado);
  echo "<h1>Primeiro Array:</h1>";
  foreach ($primeiro_array as  $value){ //Percorro e exibo o primeiro array
    echo "$value, ";
  }
  echo "<h1>Segundo Array:</h1>";
  foreach ($segundo_array as  $value){ //Percorro e exibo o segundo array
    echo "$value, ";
  }
  $finish_array = array_merge($primeiro_array, $segundo_array); //Concatenação dos arrays
  echo "<br><br>";
    echo "<h1> Rotacionando o array temos:</h1>";
  foreach ($finish_array as  $value){
    echo "$value, ";
  }

  $menorValor = $indiceExibicao; //O menor valor é o maior valor presente no array

  echo "<h1>Procurando o menor valor...</h1>";
  for($i = 0; $i < $indices; $i++){
    $condition = $finish_array[$i] < $menorValor; //Condição é uma expressão booleana que retorna 1 ou 0
    $r = $condition? 'Sim':'Não';
    echo "<p>{$finish_array[$i]} é menor que o menor valor ({$menorValor}) encontrado? {$r}</p>";
    if($condition){
      $menorValor = $finish_array[$i];
    }
  }
  echo "<h1>O menor valor é: {$menorValor}</h1>";
 ?>

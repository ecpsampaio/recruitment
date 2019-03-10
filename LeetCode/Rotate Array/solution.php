<?php
$array = array(); //Criação de array
$largura = 8;
for($i = 0; $i < $largura; $i++){ //Povoação do array com 20 posições
  $array[] = $i;
}
$indices = count($array); //Conta quantos índices o array possui
$indiceExibicao = $indices-1;
$indiceSorteado = rand(0,$indices - 1); //Sorteia um índice aleatório a partir da quantidade de índices daquele array
$PosRestantes = $indices-$indiceSorteado; //Aponta as posições que restam para o fim do array
echo "<h3>Array gerado de 0 a $indiceExibicao</h3>";
foreach ($array as  $value){
  echo "$value, ";
}
echo "<h3>Após o sorteio do número de quebra {$array[$indiceSorteado]} o array é dividido em 2 a saber: </h3>";
$primeiro_array = array_slice($array, $indiceSorteado,$PosRestantes); //Separação da primeira metade a partir do indice sorteado
$segundo_array = array_slice($array, 0, $indiceSorteado);
echo "<h3>Primeiro Array:</h3>";
foreach ($primeiro_array as  $value){
  echo "$value, ";
}
echo "<h3>Segundo Array:</h3>";
foreach ($segundo_array as  $value){
  echo "$value, ";
}
$finish_array = array_merge($primeiro_array, $segundo_array); //Concatenação de arrays
echo "<br><br>";
  echo "<h1> Rotacionando o array temos:</h1>";
foreach ($finish_array as  $value){
  echo "$value, ";
}


 ?>

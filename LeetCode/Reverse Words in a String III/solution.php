<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("../exibearray.php");

      function reverseString($string){ //Função que reverte uma string
        $stringDividida = str_split($string); //Divide a palavra inicial num array
        $arrayResultante = array();  //Criação da variável array resultante
        for($i = strlen($string); $i >= 0; $i-- ){  //Percorre a string dividida na ordem decrescente ao mesmo tempo que preeneche o array resultante
          $arrayResultante[] = $stringDividida[$i];
        }
        return implode($arrayResultante);  //Retorna o array resultante já reverso
      }

      $frase = "Essa vaga pode ser minha";
      $fraseDividida = explode(" ", $frase);

      $arrayResultante = array(); //Contem em cada indice cada palavra da frase
      $arrayFinal = array();
      # Divide frase em palavras e palavras em letras
      for($i = 0; $i < count($fraseDividida) ; $i++){
        $arrayResultante[] = $fraseDividida[$i];
        $arrayFinal[] = reverseString($arrayResultante[$i]);
      }

      echo "<h3>Dado uma frase: $frase</h3>";
      echo "<h3>A frase com palavras reversas é: ";
      exibeArray($arrayFinal);
      echo "</h3>";
     ?>

  </body>
</html>

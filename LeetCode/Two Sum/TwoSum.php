<?php

	// Para não exibir mensagem de alerta
	error_reporting(1);


	$nums = $_POST["nums"]; 		//Pega o array de números
	$numEsc = $_POST["numEsc"]; 	//Pega o numero escolhi para verificar a soma
	$numb = explode(",", $nums);	//Separa o array de número

	$verif = 0;						//Verificador para parar (break) segundo for

	for ($i=0; $i < count($numb); $i++) 
	{ 
		for ($j=i+1; $j < count($numb); $j++) 
		{ 
			$soma = $numb[$i] + $numb[$j]; //Faz a soma do array de numeros

			if ($soma == $numEsc && $i != $j) {	//Compara a soma com o valor escolhido pelo usuário
				$pos1 = $i;	//Caso seja igual a soma, armazena a posição do primeiro numero
				$pos2 = $j;	//Caso seja igual a soma, armazena a posição do segundo numero
				$verif = 1;	//Muda o verificador para 1
				break;		//Quebra o primeiro laço for
			}
		}

		if ($verif == 1) 	//Verifica se já foi encontrado as posições dos números para encontrar a soma
		{
			break;	//Caso tenha encontrado, quebra o segundo laço for
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Two Sum</title>
	</head>
	<body>
		<h2 align="center">Escolha os numeros e separe por virgula</h2>
		<form align="center" method="POST">
			<div style="margin: 5px">
				<label>Array de Números: </label>	
				<input type="text" name="nums">
			</div>
			<div>
				<label>Número Escolhido: </label>
				<input type="text" name="numEsc">
			</div>
			<div>
				<input type="submit" value="Enviar" style="margin-top: 5px;">
			</div>
		</form>


		<h2 align="center"> Resposta : <?php if($pos1 != "" || $pos2 != "") {echo "[$pos1,$pos2]";} ?></h2>

	</body>
</html>
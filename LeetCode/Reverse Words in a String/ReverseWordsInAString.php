<?php

	// Para não exibir mensagem de alerta
	error_reporting(1);


	$frase = $_POST["frase"]; 				//A frase
	$fraseDividida = explode(" ", $frase);	//Separa a frase em array

	for ($i=0; $i < count($fraseDividida); $i++) //Laço para inverter a frase
	{ 
		//Pega a ultima parte da fraseDivida e coloca na primeira da parte Invertida
		//Depois pega a penultima parte da frase dividida e coloca na segunda da parte Invertida
		//Assim por diante 
		$fraseInvertida[$i] = $fraseDividida[count($fraseDividida)-$i-1]; 
		//OBS: O -1 corrige o problema do array (n-1)
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Reverse Words in a String</title>
	</head>
	<body>
		<h2 align="center">Escreva a frase e separe por espaços em branco</h2>
		<form align="center" method="POST">
			<div style="margin: 5px">
				<label>Frase: </label>	
				<input type="text" name="frase" style="width: 300px">
			</div>
			<div>
				<input type="submit" value="Enviar" style="margin-top: 5px;">
			</div>
		</form>


		<h2 align="center"> Resposta : 
										<?php 
										for ($i=0; $i < count($fraseInvertida); $i++) 
										{ 
											echo $fraseInvertida[$i];
											echo " ";
										} 
										?>								
		</h2>

	</body>
</html>
<?php

	// Para não exibir mensagem de alerta
	error_reporting(1);


	$freq = $_POST["freq"]; 		//Pega a frequência
	$freqDiv = str_split($freq);	//Separa em letras

	$contFalta = 0; 				//Inicializa um contador de faltas igual a 0
	$contAtraso = 0;				//Inicializa um contador de Atraso igual a 0
	$verifica = 0;					//Inicializa um verificador igual a 0 (0- recompensado 1- não recompensado)

	for ($i=0; $i < count($freqDiv); $i++) 
	{
		if ($freqDiv[$i] == 'A' || $freqDiv[$i] == 'a')	//Verifica se houve ausência, caso tenha adiciona 1 ao contador
		{
			$contFalta ++;
		}
		if ($freqDiv[$i] == 'L' || $freqDiv[$i] == 'l') //Verifica se houve atraso, caso tenha adiciona 1 ao contador
		{
			$contAtraso ++;
		}
		if ($contFalta > 1 || $contAtraso > 2) 	//Verifica se o contador já passou do limite de faltas e atrasos
		{
			$verifica = 1;						//Caso tenha passado do limite, o verificador vira 1 (1- Não Recompensado)
			break;								//Quebra o laço
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registro de Presença do Aluno I</title>
	</head>
	<body>
		<h2 align="center">Escreva a frequência do aluno (P - Presença A - Ausente L - Atrasado)</h2>
		<form align="center" method="POST">
			<div style="margin: 5px">
				<label>Frequência: </label>	
				<input type="text" name="freq">
			</div>
			<div>
				<input type="submit" value="Enviar" style="margin-top: 5px;">
			</div>
		</form>


		<h2 align="center"> Resposta : <?php if($freqDiv != ""){ if($verifica == 0) {echo "True";} else {echo "False";} } ?></h2>

	</body>
</html>
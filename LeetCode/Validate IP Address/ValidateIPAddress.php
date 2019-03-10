<?php

	// Para não exibir mensagem de alerta
	error_reporting(1);


	$endereco = $_POST["endereco"]; 	//Pega o endereço
	$endDiv = explode(".", $endereco);	//Separa o endereço em ipv4... 

	if (count($endDiv) > 1) //Verifica o endereço foi divido em ipv4, caso não tenha sido vai testar o ipv6 na linha 36
	{
		$verifica = 'IPV4' ;	//Inicializa um verificador como IPV4
		for ($i=0; $i < count($endDiv); $i++)
		{
			if ($endDiv[$i] >= 0 && $endDiv[$i] <= 255)	//Verifica se o numero esta entre 0 e 255 (faixa ipv4)
			{
				$endDiv2 = str_split($endDiv[$i]);	//Separa os números

				if ($endDiv2[0] == 0) //Verifica se o primeiro vetor é 0, para resolver o problema do 01 05 etc...
				{
					if($endDiv2[1] != "")	//Caso o primeiro vetor seja 0... verifica se o proximo vetor não esta vazio (podendo ser apenas 0)
					{
						$verifica = 'Inválido' ; //Caso tenha o proximo vetor esteja preenchido então esta invalido
					}
				}
			}
			else //Caso não esteja na faixa entre 0 e 255 então esta invalido
			{
				$verifica = 'Inválido' ;
				break;	//Quebra o laço
			}
		}
	}
	else
	{
		$endDiv = explode(":", $endereco);	//Separa o endereço em ipv6

		if ($endereco != "")	//Verifica se o endereço foi digitado algo
		{
			$verifica = 'IPV6' ;	//Inicializa o verificador como IPV6

			if (count($endDiv) != 8) //Caso o ipv6 não esteja divido em 8 partes, então esta invalido
			{
				$verifica = 'Inválido' ;
			}
			else
			{
				for ($i=0; $i < count($endDiv); $i++) //Laço para verificar cada uma das 8 partes
				{
					$endDiv2 = str_split($endDiv[$i]);	//Divide cada uma das 8 partes

					if (count($endDiv2) == 0 || count($endDiv2) > 4) //Verifica se possui mais que 4 caracters ou vazio em cada parte
					{
						$verifica = 'Inválido' ; //Caso seja verdade, esta invalido
						break;	
					}
					/*
					else
					{
						for ($j=0; $j < count($endDiv2); $j++)
						{
							if ($endDiv2[j] == "A")
							{
								//Valido
							}
							else
							{
								$verifica = 'sdfsdf';
								break;
							}
						}
					}
					*/
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Validação de Endereço IP</title>
	</head>
	<body>
		<h2 align="center">Digita o endereço IP (IPV4 ou IPV6)</h2>
		<form align="center" method="POST">
			<div style="margin: 5px">
				<label>Endereço: </label>	
				<input type="text" name="endereco">
			</div>
			<div>
				<input type="submit" value="Enviar" style="margin-top: 5px;">
			</div>
		</form>


		<h2 align="center"> Resposta : <?php echo $verifica; ?></h2>

	</body>
</html>
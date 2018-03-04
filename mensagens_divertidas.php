<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title> PHP Básico</title>
	</head>

	<body>
	<?php           
		$inteiro = 10;
		echo $inteiro;

		print "<br>";
		print "<br>";


		$fracao = 15.6;
		echo $fracao;
		
		print "<br>";
		print "<br>";


		$stringson = 'isso eh uma string';
		echo $stringson; 

		print "<br>";
		print "<br>";

		//array

		$lista = array(1 => 20, 2=> 30, 3 => 90 , 4=> 100);

		echo $lista[1];

		
		print "<br>";
		print "<br>";


		var_dump($lista);

				
		print "<br>";
		print "<br>";

		print_r($lista);

		

		// array multidimensional
		$trabson[0][0] = 'foi 0';
		$trabson[0][1] = 'foi 1';
		$trabson[0][2] = 'foi 2';
		$trabson[0][3] = 'foi 3';
		$trabson[0][4] = 'foi 4';
		$trabson[0][5] = 'foi 5';
		$trabson[0][6] = 'foi 6';

		for ($i = 0 ; $i < 7 ; $i++){
			echo $trabson[0][$i];
			print '<br/>';
		}
		
		print '<br/>';
		var_dump($trabson[0]);
	
	
	?>
		
	</body>
</html>
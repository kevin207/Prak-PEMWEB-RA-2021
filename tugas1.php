<!DOCTYPE html>

<html>
	
	<head>
		<title>119140207</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>

	<body>

		<header>   
			<h2>P5 - 119140207</h2>
		</header>

		<nav>
			<a href="tugas2.php">Tugas 2</a>
			<a href="tugas3.php">Tugas 3</a>
		</nav>
		
		<form method="POST">

			<label for="bilangan1">Bilangan 1 :</label><br>
			<input type="number" id="bilangan1" name="bilangan1"><br>
			<label for="bilangan2">Bilangan 2 :</label><br>
			<input type="number" id="bilangan2" name="bilangan2"><br>
			<input id="submit" type="submit" value="Submit">

		</form> 
		
	</body>

	<div id="hasil">
		
		<?php

			$a=$_POST['bilangan1'];
			$b=$_POST['bilangan2'];

			function tambah($a, $b)
			{
				echo "PENJUMLAHAN <br>";
				echo "Operator	: + <br>";
				echo "Hasil     : ".$a+$b."<br><br>";
			}

			function kurang($a, $b)
			{
				echo "PENGURANGAN <br>";
				echo "Operator	: - <br>";
				echo "Hasil     : ".$a-$b."<br><br>";
			}

			function kali($a, $b)
			{
				echo "PERKALIAN <br>";
				echo "Operator	: * <br>";
				echo "Hasil     : ".$a*$b."<br><br>";
			}

			function bagi($a, $b)
			{
				echo "PEMBAGIAN <br>";
				echo "Operator	: / <br>";
				echo "Hasil     : ".$a/$b."<br><br>";
			}

			function modulus($a, $b)
			{
				echo "MODULUS <br>";
				echo "Operator	: % <br>";
				echo "Hasil     : ".$a%$b."<br><br>";
			}

			if($a!=NULL && $b!=NULL)
			{
				echo "Berikut merupakan hasil dari setiap operasi (".$a." dan ".$b.") <br><br>";
				tambah($a,$b);
				kurang($a,$b);
				kali($a,$b);
				bagi($a,$b);
				modulus($a,$b);
			}

			else if ($a!=NULL && $b==NULL || $a==NULL && $b!=NULL)
			{
				echo "Error, please input the second value";
			}

		?>

	</div>

</html>



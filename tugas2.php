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
			<a href="tugas1.php">Tugas 1</a>
			<a href="tugas3.php">Tugas 3</a>
		</nav>
		
		<form method="POST">

			<label for="bilangan1">Kata 1 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 2 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 3 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 4 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 5 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 6 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 7 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 8 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 9 :</label>
			<input type="text" name="kata[]" /><br>

			<label for="bilangan1">Kata 10 :</label>
			<input type="text" name="kata[]" /><br>

			<input id="submit" type="submit" value="Submit">

		</form> 

		<div id="hasil">
			
			<?php

				$kata=$_POST['kata'];
				sort($kata);

				function tampil($x)
				{
					foreach( $x as $a ) 
					{
						if($a!="")
						{
							print $a."<br>";
						}
					}
				}
				
				echo "Kata-kata setelah diurutkan :<br>";
				tampil($kata);

			?>

		</div>
		
	</body>

</html>



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
			<a href="tugas2.php">Tugas 2</a>
		</nav>
		
	</body>

	<div id="hasil">

		<?php

			function prima($x)
			{
				for($i=1;$i<=$x;$i++)
				{
					$bil=0;

					for($j=1;$j<=$i;$j++)
					{
						if($i%$j==0)
						{
							$bil=$bil+1;
						}
					}

					if ($bil==2)
					{
						if ($i==47)
						{
							print $i; 	
						}

						else
						{
							print $i.", ";
						}
						
					}
					
				}
			}

			echo "Bilangan Prima dari 1-50: <br><br>";
			prima(50);

		?>
	
	</div>

</html>



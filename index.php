<!DOCTYPE html>

<html>
	
	<head>
		<title>119140207</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<header>   
			<h2>P6 - 119140207</h2>
		</header>
		
		<p>
			Daftar harga buah :<br> 
			- Jambu  : Rp.13.000/kg<br>
			- Mangga : Rp.15.000/kg<br>
			- Salak  : Rp.10.000/kg<br>
		</p>

		<form method="POST">

			<label for="jambu">Buah Jambu :</label><br>
			<input type="number" id="jambu" name="jambu">kg<br>
			<label for="mangga">Buah Mangga :</label><br>
			<input type="number" id="mangga" name="mangga">kg<br>
			<label for="mangga">Buah Salak :</label><br>
			<input type="number" id="salak" name="salak">kg<br>
			<input id="submit" type="submit" value="Beli">

		</form> 

		<button onclick="tampil()">Tagihan</button>

		<?php

			class belanja
			{
				var $tagihan;

				public function beli($a,$b,$c)
				{
					$this->jambu = $a;
					$this->mangga = $b;
					$this->salak = $c;
				}

				public function tagihan()
				{
					$this->tagihan =($this->jambu*13000) + ($this->mangga*15000) +  ($this->salak*15000);
				}
				
				public function info()
				{
					echo "Buah yang dibeli {$this->jambu}kg jambu, {$this->mangga}kg mangga, dan {$this->salak}kg salak dengan total tagihan: Rp. {$this->tagihan}";
				}

			}

			$pembeli = new belanja();
			$pembeli->beli($_POST['jambu'],$_POST['mangga'],$_POST['salak']);
			$pembeli->tagihan();

		?>
		
	</body>

	<div id="hasil"></div>

	<script>

		function tampil()
		{
			var tagihan= "<?php $pembeli->info(); ?>";
			document.getElementById("hasil").innerHTML = tagihan;
			document.getElementById("hasil").style.background = "white";
		}
		
	</script>

</html>



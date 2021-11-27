<!DOCTYPE html>

<html>
	
	<head>
		<title>P7 - 119140207</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>

	<body>
		
		<div class="container">
			

			<div class="header">

				<p>Calculator</p>

			</div>

			<div class="main-content">
				
				<div class="form">
					
					<form method="POST" action="calculator.php">
						
						<tr>
							
							<td>Angka Ke-1</td>
							<td>:</td>
							<td><input type="text" name="angka1"></td>

						</tr><br><br>

						<tr>
							
							<td>Angka Ke-2</td>
							<td>:</td>
							<td><input type="text" name="angka2"></td>

						</tr>

						<br>
						<input class="enter" type="submit" name="Submit">
						<br>

					</form>

					<button type="button" onclick="tambah()">+</button>
					<button type="button" onclick="kurang()">-</button>
					<button type="button" onclick="kali()">x</button>
					<button type="button" onclick="bagi()">:</button>

					<?php

						class calculator
						{

							var $hasil1;
							var $hasil2;
							var $hasil3;
							var $hasil4;

							function inisial($a,$b)
							{
								$this->angka1 = $a;
								$this->angka2 = $b;
							}

							function tambah()
							{
								$this->hasil1 = ($this->angka1) + ($this->angka2);
							}

							function kurang()
							{
								$this->hasil2 = ($this->angka1) - ($this->angka2);
							}

							function kali()
							{
								$this->hasil3 = ($this->angka1) * ($this->angka2);
							}

							function bagi()
							{
								$this->hasil4 = ($this->angka1) / ($this->angka2);
							}

							function tampil1()
							{
								echo "{$this->angka1} + {$this->angka2} = {$this->hasil1}";
							}

							function tampil2()
							{
								echo "{$this->angka1} - {$this->angka2} = {$this->hasil2}";
							}

							function tampil3()
							{
								echo "{$this->angka1} x {$this->angka2} = {$this->hasil3}";
							}

							function tampil4()
							{
								echo "{$this->angka1} / {$this->angka2} = {$this->hasil4}";
							}
						}
						
						$user = new calculator();
						$user->inisial($_POST['angka1'],$_POST['angka2']);
						$user->tambah();
						$user->kurang();
						$user->kali();
						$user->bagi();

					?>
					
				</div>
				
				<div id="hasil">
					
				</div>

			</div>

			<div class="footer">

				<p> Kevin Tanuwijaya - 119140207 </p>

			</div>


		</div>

	</body>

	<script>

		function tambah()
		{
			var hasil= "<?php $user->tampil1(); ?>";
			document.getElementById("hasil").innerHTML = hasil;
		}

		function kurang()
		{
			var hasil= "<?php $user->tampil2(); ?>";
			document.getElementById("hasil").innerHTML = hasil;
		}

		function kali()
		{
			var hasil= "<?php $user->tampil3(); ?>";
			document.getElementById("hasil").innerHTML = hasil;
		}

		function bagi()
		{
			var hasil= "<?php $user->tampil4(); ?>";
			document.getElementById("hasil").innerHTML = hasil;
		}

	</script>

</html>



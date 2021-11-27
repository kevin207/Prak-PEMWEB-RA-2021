<!DOCTYPE html>

<html>
	
	<head>
		<title>P7 - 119140207</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	</head>

	<body>
		
		<div class="container">
			

			<div class="header">

				<p>FORM</p>

			</div>

			<div class="main-content">
				
				<div class="form">
				
					<form method="POST" id="form_biodata">
					<table>

						<tr>
							<td>NIM</td>
							<td>:</td>
							<td><input type="text" id="nim" name="nim"><br></td>
						</tr>

						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" id="nama" name="nama"><br></td>
						</tr>

						<tr>
							<td>Prodi</td>
							<td>:</td>
							<td><input type="text" id="prodi" name="prodi"><br></td>
						</tr>

						<tr>
							<td>Angkatan</td>
							<td>:</td>
							<td><input type="text" id="Angkatan" name="angkatan"><br></td>
						</tr>

					</table>
					</form>
					
				</div>

				<div class="button">
					
					<button id="btn_tampil">Insert</button>
					<button id="btn_update" title="NIM dipakai sebagai referensi update pada tabel">Update</button>
					<button id="btn_delete" title="NIM dipakai sebagai referensi delete pada tabel">Delete</button>

				</div>
				
				<div id="hasil"></div>

			</div>

			<div class="footer">

				<p> Kevin Tanuwijaya - 119140207 </p>

			</div>

		</div>

	</body>

	<script>

		$('#hasil').load("tampil.php");	
			
			$(document).ready(function()
			{
				$('#btn_tampil').click(function()
				{
					var data = $('#form_biodata').serialize();
					$.ajax(
					{
						type	: 'POST',
						url		: "insert.php",
						data 	: data,
						cache	: false,
						success : function(data)
						{
							$('#hasil').load("tampil.php");
						}
					});
				});
			});

			$(document).ready(function()
			{
				$('#btn_update').click(function()
				{
					var data = $('#form_biodata').serialize();
					$.ajax(
					{
						type	: 'POST',
						url		: "update.php",
						data 	: data,
						cache	: false,
						success : function(data)
						{
							$('#hasil').load("tampil.php");
						}
					});
				});
			});

			$(document).ready(function()
			{
				$('#btn_delete').click(function()
				{
					var data = $('#form_biodata').serialize();
					$.ajax(
					{
						type	: 'POST',
						url		: "delete.php",
						data 	: data,
						cache	: false,
						success : function(data)
						{
							$('#hasil').load("tampil.php");
						}
					});
				});
			});
		
	</script>

</html>



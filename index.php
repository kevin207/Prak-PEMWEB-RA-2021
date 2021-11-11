<!DOCTYPE html>

<html>
	
	<head>
		<title>119140207</title>
		<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<header>   
			<h2>CRUD AJAX</h2>
		</header>
		
		<form method="POST" id="form_biodata">
			<label for="nim">NIM:</label><br>
			<input type="text" id="nim" name="nim"><br>
			<label for="nama">Nama:</label><br>
			<input type="text" id="nama" name="nama"><br>
			<label for="prodi">Prodi:</label><br>
			<input type="text" id="prodi" name="prodi"><br>
			<label for="angkatan">Angkatan:</label><br>
			<input type="text" id="angkatan" name="angkatan"><br><br>
		</form> 

		<button id="btn_tampil">Insert</button>
		<button id="btn_update" title="NIM dipakai sebagai referensi update pada tabel">Update</button>
		<button id="btn_delete" title="NIM dipakai sebagai referensi delete pada tabel">Delete</button>

		<div id="tampil_data"></div>

		<script>

			$('#tampil_data').load("tampil.php");	
			
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
							$('#tampil_data').load("tampil.php");
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
							$('#tampil_data').load("tampil.php");
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
							$('#tampil_data').load("tampil.php");
						}
					});
				});
			});

		</script>

	</body>

</html>


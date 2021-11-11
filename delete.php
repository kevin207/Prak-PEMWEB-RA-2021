<?php

	include "koneksi.php";

	$nim=$_POST['nim'];
	$sql="delete from biodata where nim='$nim'";

	$hasil=mysqli_query($koneksi,$sql);

	echo "Data succesfully deleted";
?>
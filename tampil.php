<table>

	<tr>	
		<td>NIM</td>
		<td>Nama</td>
		<td>Prodi</td>
		<td>Angkatan</td>
	</tr>


	<?php
			
		include "koneksi.php";
		$hasil=mysqli_query($koneksi, "select * from biodata order by nim asc");
		$no=0;

		while ($data = mysqli_fetch_array($hasil)):
			$no++;
	?>

	<tr>	
		<td> <?php echo $data['0']; ?> </td>
		<td> <?php echo $data['1']; ?> </td>
		<td> <?php echo $data['2']; ?> </td>
		<td> <?php echo $data['3']; ?> </td>
	</tr>

	<?php endwhile; ?>

</table>


<!DOCTYPE html>
<html>
	<head>
		<title>Jawaban UTS</title>
		<style>
			table, th, td {
				border: 1px solid black;
			}
			.col1 {
				width: 150px;
				float: left;
			}
		</style>
	</head>
	<body>
		<form method="get">
			<span class="col1">Nama Wilayah</span> :
			<select name="namaWilayah">
				<option>Nama Wilayah</option>
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select><br>
			<span class="col1">Jumlah Positif</span> : <input type="text" name="jmlPositif"><br>
			<span class="col1">Jumlah Dirawat</span> : <input type="text" name="jmlDirawat"><br>
			<span class="col1">Jumlah Sembuh</span> : <input type="text" name="jmlSembuh"><br>
			<span class="col1">Jumlah Meninggal</span> : <input type="text" name="jmlMeninggal"><br>
			<span class="col1">Nama Operator</span> : <input type="text" name="nama"><br>
			<span class="col1">NIM Mahasiswa</span> : <input type="text" name="nim"><br>
			<input type="submit"></input>
		</form><br><br><br><br>
		<center><h2>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>
		<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
		<?php echo $_GET['nama']; ?> 
		<?php echo $_GET['nim']; ?>
		<table>
			<tr>
				<th>Positif</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>
			</tr>
			<tr>
				<th><?php echo $_GET['jmlPositif']; ?></th>
				<th><?php echo $_GET['jmlDirawat']; ?></th>
				<th><?php echo $_GET['jmlSembuh']; ?></th>
				<th><?php echo $_GET['jmlMeninggal']; ?></th>
			</tr>
		</table></h2></center>
		<?php
			if(isset($_GET['nama']))
			{
				$namaWilayah=$_GET['namaWilayah'];
				$jmlPositif=$_GET['jmlPositif'];
				$jmlDirawat=$_GET['jmlDirawat'];
				$jmlSembuh=$_GET['jmlSembuh'];
				$jmlMeninggal=$_GET['jmlMeninggal'];
				$nama=$_GET['nama'];
				$nim=$_GET['nim'];
				$fp = fopen('data.txt', 'a');
				fwrite($fp, $namaWilayah);
				fwrite($fp, $jmlPositif);
				fwrite($fp, $jmlDirawat);
				fwrite($fp, $jmlSembuh);
				fwrite($fp, $jmlMeninggal);
				fwrite($fp, $nama);
				fwrite($fp, $nim);
				fclose($fp);
			}
		?>
	</body>
</html>
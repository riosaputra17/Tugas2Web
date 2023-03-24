<!DOCTYPE html>
<html>
<head>
	<title>Form Input PHP</title>
</head>
<body>
	<form method="POST">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" required><br><br>

		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br>

		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan" required>
			<option value="">Pilih Pekerjaan</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Pegawai">Pegawai</option>
			<option value="Wiraswasta">Wiraswasta</option>
			<option value="Lainnya">Lainnya</option>
		</select><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];

		// Menghitung umur berdasarkan tanggal lahir
		$tanggal_lahir = new DateTime($tgl_lahir);
		$today = new DateTime();
		$umur = $today->diff($tanggal_lahir)->y;

		echo "<br>Nama: " . $nama;
		echo "<br>Tanggal Lahir: " . $tgl_lahir;
		echo "<br>Umur: " . $umur;
		echo "<br>Pekerjaan: " . $pekerjaan;
	}
	?>
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Seleksi</title>
</head>

<body>

<!-- Pembukaan tag form dengan action PHP_SELF dan method POST. Pada method POST, data form tidak akan ditampilkan di address bar. -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Pekerjaan
	<!-- Tag untuk select box. Select box bernama job dan memiliki empat buah opsi. -->
	<select name="job">
		<!-- Opsi dengan nilai Mahasiswa -->
		<option value="Mahasiswa">Mahasiswa</option>
		<!-- Opsi dengan nilai ABRI -->
		<option value="ABRI">ABRI</option>
		<!-- Opsi dengan nilai PNS -->
		<option value="PNS">PNS</option>
		<!-- Opsi dengan nilai Swasta -->
		<option value="Swasta">Swasta</option>
	</select><br/>
	<!-- Tag input submit dengan value OK -->
	<input type="submit" value="OK" />
</form>

<?php
// Pengecekan apakah variabel $_POST['job'] sudah terisi atau belum
if(isset($_POST['job'])){
	// Jika variabel $_POST['job'] sudah terisi, maka akan menampilkan variabel $_POST['job'] tersebut
	echo $_POST['job'];
}
?>

</body>
</html>
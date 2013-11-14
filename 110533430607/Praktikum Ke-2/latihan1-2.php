<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode GET</title>
</head>

<body>

<!-- Pembukaan tag form dengan action PHP_SELF dan method POST. Pada method POST, data form tidak akan ditampilkan di address bar. -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<!-- Tag input text dengan name adalah nama -->
<input type="text" name="nama" /><br/>
<!-- Tag input submit dengan value OK -->
<input type="submit" value="OK" />
</form>

<?php
// Pengecekan apakah variabel $_POST['nama'] sudah terisi atau belum
if(isset($_POST['nama'])){
	// Jika variabel $_POST['nama'] sudah terisi, akan menampilkan string Hallo dan isi variabel $_POST['nama']
	echo 'Hallo, ' . $_POST['nama'];
}
?>

</body>
</html>
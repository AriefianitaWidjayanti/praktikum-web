<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode GET</title>
</head>

<body>

<!-- Pembukaan tag form dengan action PHP_SELF dan method GET. Data form akan di-submit ke halaman sendiri. Pada method GET, data form akan ditampilkan di address bar -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<!-- Tag form input text dengan name adalah nama -->
<input type="text" name="nama" /><br/>
<!-- Tag form input submit dengan value OK -->
<input type="submit" value="OK" />
</form>

<?php
// Pengecekan apakah variabel $_GET['nama'] sudah terisi atau belum
if(isset($_GET['nama'])){
	// Jika variabel $_GET['nama'] telah terisi, akan menampilkan string Hallo dan isi varibel $_GET['nama']
	echo 'Hallo, ' . $_GET['nama'];
}
?>

</body>
</html>
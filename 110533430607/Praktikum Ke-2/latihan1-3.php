<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Identifikasi Metode</title>
</head>

<body>

<!-- Pembukaan tag form dengan action PHP_SELF dan method GET. Pada method GET, data form akan ditampilkan di address bar. -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<!-- Tag input text dengan name adalah nama -->
<input type="text" name="nama" /><br/>
<!-- Tag input submit dengan value OK -->
<input type="submit" value="OK" />
</form>

<?php
// Pengecekan apakah variabel $_REQUEST['nama'] sudah terisi atau belum. $_REQUEST mempunyai fungsi yang sama dengan $_POST dan $_GET
if(isset($_REQUEST['nama'])){
	// Jika variabel $_REQUEST sudah terisi, maka akan menampilkan metode pengiriman dengan cara $_SERVER['REQUEST_METHOD']. String yang ditampilkan adalah GET karena method form berupa GET
	echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>

</body>
</html>
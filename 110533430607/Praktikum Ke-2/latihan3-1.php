<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Radio Button</title>
</head>

<body>

<!-- Pembukaan tag form dengan action PHP_SELF dan method POST. Pada method POST, data form tidak akan ditampilkan di address bar. -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Jenis Kelamin
	<!-- Tag input radio dengan name sex. Radio yang tersedia ada 2 yaitu pilihan Pria dan Wanita. -->
	<input type="radio" name="sex" value="Pria" />Pria
	<input type="radio" name="sex" value="Wanita" />Wanita <br/>
	<!-- Tag input submit dengan value OK -->
	<input type="submit" value="OK" />
</form>

<?php
// Pengecekan apakah varabel $_POST['sex'] sudah terisi atau belum
if(isset($_POST['sex'])){
	// Jika variabel $_POST['sex'] sudah terisi, maka akan menampilkan isi variabel $_POST['sex']
	echo $_POST['sex'];
}
?>

</body>
</html>
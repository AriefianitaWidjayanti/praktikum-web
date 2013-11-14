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
	<!-- Pada input radio Pria, terdapat pengecekan apakah variabel $_POST['sex'] sudah terisi dan variabel $_POST['sex'] memiliki value Pria. Jika benar maka akan menampilkan script checked="checked" -->
	<input type="radio" name="sex" value="Pria" checked <?php if(isset($_POST['sex']) AND $_POST['sex']=='Pria'){ echo 'checked="checked"'; } ?> />Pria
	<!-- Pada input radio Wanita, terdapat pengecekan apakah variabel $_POST['sex'] sudah terisi dan variabel $_POST['sex'] memiliki value Wanita. Jika benar maka akan menampilkan script checked="checked" -->
	<input type="radio" name="sex" value="Wanita" <?php if(isset($_POST['sex']) AND $_POST['sex']=='Wanita'){ echo 'checked="checked"'; } ?> />Wanita <br/>
	<!-- Tag input submit dengan value OK -->
	<input type="submit" value="OK" />
</form>

<?php
// Pengecekan apakah variabel $_POST['sex'] telah terisi atau belum
if(isset($_POST['sex'])){
	// Jika variabel $_POST['sex'] sudah terisi, maka akan menampilkan variabel $_POST['sex']
	echo $_POST['sex'];
}
?>

</body>
</html>
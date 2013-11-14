<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Checkbox</title>
</head>

<body>

<!-- Pembukaan tag form dengan action PHP_SELF dan method POST. Pada method POST, data form tidak akan ditampilkan di address bar. -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hobby
	<!-- Tag input checkbox dengan nama hobby[]. Nama checkbox dengan menggunakan array -->
	<!-- Checkbox dengan nilai Membaca -->
	<input type="checkbox" name="hobby[]" value="Membaca" />Membaca
	<!-- Checkbox dengan nilai Olahraga -->
	<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga
	<!-- Checkbox dengan nilai Menyanyi -->
	<input type="checkbox" name="hobby[]" value="Menyanyi" />Menyanyi<br/>
	<!-- Tag input submit dengan value OK -->
	<input type="submit" value="OK" />
</form>

<?php
// Ekstraksi nilai
// Pengecekan apakah varibel $_POST['hobby'] sudah terisi atau belum
if(isset($_POST['hobby'])){
	// Jika variabel $_POST['hobby'] sudah terisi, maka akan menjalankan perulangan berisi variabel $_POST['hobby']. Variabel $key menyimpan indeks array sedangkan $val menyimpan nilai variabel $_POST['hobby']
	foreach($_POST['hobby'] as $key => $val){
		// Selama perulangan, akan menampilkan nilai variabel $key dan $val
		echo $key . ' -> ' . $val . '<br/>';
	}
}
?>

</body>
</html>
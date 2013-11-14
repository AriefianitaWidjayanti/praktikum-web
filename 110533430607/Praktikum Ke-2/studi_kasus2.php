<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 2</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="main">

	<h1>Studi Kasus 2 - Check Box dengan Preselecting</h1>

	<div id="content">

		<!-- Pembukaan tag form dengan action PHP_SELF dan method POST. Pada method POST, data form tidak akan ditampilkan di address bar. -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Hobby :
			<!-- Pada checkbox hobby[] pertama, terdapat pengecekan apakah variabel $_POST['hobby'] dengan indeks ke-0 sudah terisi atau belum dan apakah nilainya Membaca. Jika benar, maka akan menampilkan checked="checked" -->
			<input type="checkbox" name="hobby[]" value="Membaca" <?php if(isset($_POST['hobby'][0]) and $_POST['hobby'][0]=="Membaca"){ echo 'checked="checked"'; } ?>/>Membaca
			<!-- Pada checkbox hobby[] kedua, terdapat pengecekan apakah variabel $_POST['hobby'] dengan indeks ke-0 dan ke-1 sudah terisi atau belum dan apakah nilainya Olahraga. Jika benar, maka akan menampilkan checked="checked" -->
			<input type="checkbox" name="hobby[]" value="Olahraga" <?php if((isset($_POST['hobby'][0]) or isset($_POST['hobby'][1])) and ($_POST['hobby'][0]=="Olahraga" or $_POST['hobby'][1]=="Olahraga") or !isset($_POST['hobby'])){ echo 'checked="checked"'; } ?>/>Olahraga
			<!-- Pada checkbox hobby[] ketiga, terdapat pengecekan apakah variabel $_POST['hobby'] dengan indeks ke-0, ke-1, dan ke-2 sudah terisi atau belum dan apakah nilainya Menyanyi. Jika benar, maka akan menampilkan checked="checked" -->
			<input type="checkbox" name="hobby[]" value="Menyanyi" <?php if((isset($_POST['hobby'][0]) or isset($_POST['hobby'][1]) or isset($_POST['hobby'][2])) and ($_POST['hobby'][0]=="Menyanyi" or $_POST['hobby'][1]=="Menyanyi" or $_POST['hobby'][2]=="Menyanyi")){ echo 'checked="checked"'; } ?>/>Menyanyi<br/>
			<!-- Tag input submit dengan value OK -->
			<input type="submit" class="button" value="OK" />
		</form>

		<?php
		// Ekstraksi nilai
		// Pengecekan apakah variabel $_POST['hobby'] sudah terisi atau belum
		if(isset($_POST['hobby'])){
			// Jika variabel sudah terisi, maka akan menampilkan isi variabel $_POST['hobby']
			echo '<hr/>';
			echo '<h2>Hasil Pemilihan</h2>';
			// Terdapat perulangan yang menyatakan $_POST['hobby'] dengan $key sebagai indeks array dan $val sebagai nilai variabel $_POST['hobby']
			foreach($_POST['hobby'] as $key => $val){
				// Selama terjadi perulangan, akan menampilkan variabel $key dan $val
				echo $key . ' -> ' . $val . '<br/>';
			}
		}
		?>

	</div>

</div>

</body>
</html>
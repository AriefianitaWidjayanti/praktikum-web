<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 1</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="main">

	<h1>Studi Kasus 1 - Seleksi dengan Preselecting</h1>

	<div id="content">

		<!-- Pembukaan tag form dengan action PHP_SELF dan method POST. Pada method POST, data form tidak akan ditampilkan di address bar. -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Pekerjaan :
			<!-- Tag untuk select box. Select box bernama job dan memiliki empat buah opsi. -->
			<select name="job" class="text">
				<!-- Pada option Mahasiswa terdapat operasi kondisi. Jika variabel $_POST['job'] terisi dan bernilai 'Mahasiswa' maka akan mencetak selected="selected". -->
				<option value="Mahasiswa" <?php if(isset($_POST['job']) AND $_POST['job']=='Mahasiswa'){ echo 'selected="selected"'; } ?>>Mahasiswa</option>
				<!-- Pada option ABRI terdapat operasi kondisi. Jika variabel $_POST['job'] terisi dan bernilai 'ABRI' maka akan mencetak selected="selected". -->
				<option value="ABRI" <?php if(isset($_POST['job']) AND $_POST['job']=='ABRI' or !isset($_POST['job'])){ echo 'selected="selected"'; } ?>>ABRI</option>
				<!-- Pada option PNS terdapat operasi kondisi. Jika variabel $_POST['job'] terisi dan bernilai 'PNS' maka akan mencetak selected="selected". -->
				<option value="PNS" <?php if(isset($_POST['job']) AND $_POST['job']=='PNS'){ echo 'selected="selected"'; } ?>>PNS</option>
				<!-- Pada option Swasta terdapat operasi kondisi. Jika variabel $_POST['job'] terisi dan bernilai 'Swasta' maka akan mencetak selected="selected". -->
				<option value="Swasta" <?php if(isset($_POST['job']) AND $_POST['job']=='Swasta'){ echo 'selected="selected"'; } ?>>Swasta</option>
			</select><br/>
			<!-- Tag input submit dengan value OK -->
			<input type="submit" class="button" value="OK" />
		</form>

		<?php
			// Pengecekan apakah variabel $_POST['job'] sudah terisi atau belum
			if(isset($_POST['job'])){
				// Jika variabel $_POST['job'] sudah terisi, maka akan menampilkan variabel $_POST['job'] tersebut.
				echo '<hr/>';
				echo '<h2>Hasil Pemilihan</h2>';
				echo 'Pekerjaan : ' . $_POST['job'];
			}
		?>

	</div>

</div>

</body>
</html>
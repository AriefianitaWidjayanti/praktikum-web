<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tugas Praktikum 1</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!-- Script JavaScript untuk mengecek nilai dari form -->
	<script type="text/javascript">
		// Deklarasi fungsi check
		function check(){
			// Deklarasi variabel user dengan nilai input box username 
			var user=document.login.username.value;
			// Deklarasi variabel pass degnan nilai input box password
			var pass=document.login.password.value;
			// Deklarasi variabel regex. Variabel ini digunakan untuk mengecek apakah inputan hanya berisi huruf saja. Karena input yang diperbolehkan hanya huruf a-z dan A-Z.
			var regex=/^[a-zA-Z]+$/;

			// Operasi kondisi jika variabel user tidak memiliki nilai
			if(user==""){
				// Muncul peringatan bahwa login gagal
				alert("Login gagal! Pastikan username terisi!");
				// Mengembalikan fokus kursor pada input box username
				document.login.username.focus();
				// Mengembalikan nilai false agar form tidak di-submit
				return false;
			// Operasi kondisi jika variabel pass tidak memiliki nilai
			}else if(pass==""){
				// Muncul peringatan bahwa login gagal
				alert("Login gagal! Pastikan password terisi!");
				// Mengembalikan fokus kursor pada input box password
				document.login.password.focus();
				// Mengembalikan nilai false agar form tidak di-submit
				return false;
			// Operasi kondisi jika variabel user mengandung selain huruf abjad
			}else if(user.search(regex)===-1){
				alert("Login gagal! Pastikan input username huruf!");
				// Mengembalikan fokus kursor pada input box username
				document.login.username.focus();
				// Mengembalikan nilai false agar form tidak di-submit
				return false;
			// Operasi kondisi jika variabel pass mengandung selain huruf abjad
			}else if(pass.search(regex)===-1){
				alert("Login gagal! Pastikan input password huruf!");
				// Mengembalikan fokus kursor pada input box password
				document.login.password.focus();
				// Mengembalikan nilai false agar form tidak di-submit
				return false;
			}else{
				// Jika semua pernyataan bernilai salah, maka akan mengembalikan nilai true sehingga form dapat di-submit
				return true;
			}
		}
	</script>
</head>

<body>

<div id="main">

	<h1>Tugas Praktikum 1 - Aplikasi Login Form</h1>

	<div id="content">
		<!-- Pengecekan apakah nilai variabel $_POST['submit'] telah terisi atau belum -->
		<?php if(!isset($_POST['submit'])){ ?>
			<!-- Jika variabel $_POST['submit'] belum terisi, maka akan menampilkan form login -->
			<!-- Pada form login menggunakan action PHP_SELF dan method POST. Ketika tombol submit diklik, maka akan menjalankan fungsi javascript check() -->
			<form action="<?php $_SERVER['PHP_SELF'];?>" name="login" method="post" onsubmit="return check()">
				<h1 style="margin-top:-10px;">LOGIN FORM</h1>
				<hr/>
				<br/>
				<table>
					<tr><td>Username</td></tr>
					<!-- Tag untuk input text username -->
					<tr><td><input type="text" name="username" class="text" value="" size="40"/></td></tr>
					<tr><td>Password</td></tr>
					<!-- Tag untuk input text password. Text box ini bertipe password. -->
					<tr><td><input type="password" name="password" class="text" value="" size="40"/></td></tr>
					<!-- Tag untuk input button dengan nama submit -->
					<tr><td><input type="submit" name="submit" class="button" value="LOGIN" /></td></tr>
				</table>
				<br/>
			</form>
		<?php } ?>

		<?php
			// Pengecekan apakah variabel $_POST['submit'] terisi atau belum
			if(isset($_POST['submit'])){
				// Jika variabel $_POST['submit'] sudah terisi, akan menampilkan hasil login
				echo '<h1 style="margin-top:-10px;">LOGIN FORM</h1>';
				echo '<hr/>';
				echo '<br/>';

				// Deklarasi variabel user dengan isi string tofasuriawan
				$user="tofasuriawan";
				// Deklarasi variabel pass dengan isi string rahasia
				$pass="rahasia";

				// Pengecekan apakah variabel $_POST['susername'] dan $_POST['password'] berupa string
				if(is_string($_POST['username']) AND is_string($_POST['password'])){
					// Jika bernilai benar maka terdapat pengecekan apakah nilai variabel user sama dengan $_POST['username'] dan variabel pass sama dengan $_POST['password']
					if($_POST['username']==$user AND $_POST['password']==$pass){
						// Jika bernilai benar, maka akan muncul string selamat datang beserta isi variabel $_POST['username']
						echo 'Selamat datang, <strong>' . $_POST['username'] . "!</strong> Anda berhasil login pada " . date('d F Y H:i:s') . ".";
					}else{
						// Jika bernilai salah, maka akan muncul string peringatan bahwa username dan password salah
						echo 'Maaf, username dan password Anda salah.';
					}
				}else{
					// Jika variabel $_POST['username'] dan $_POST['password'] bukan string, maka akan muncul peringatan bahwa input username dan password harus string
					echo 'Input username dan password harus string!';
				}
			}
		?>

	</div>

</div>

</body>
</html>
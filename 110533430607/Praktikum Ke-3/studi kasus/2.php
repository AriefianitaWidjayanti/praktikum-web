<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data Seleksi</title>
	</head>
	
	<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi
		<input type="checkbox" name="hobby[]" value="Membaca"  
			<?php
				if ($_POST['hobby']=='Membaca'){
				echo 'checked="checked"';
			}
			?>
			/>Membaca
		<input type="checkbox" name="hobby[]" value="Olahraga"  
			<?php
				if ($_POST['hobby']=='Olahraga'){
				echo 'checked="checked"';
			}
			?>
			/>Olahraga
		<input type="checkbox" name="hobby[]" value="Menyanyi" 
			<?php
				if ($_POST['hobby']=='Menyanyi'){
				echo 'checked="checked"';
			}
			?>
			/>Menyanyi

		<input type="submit" value="ok" />
	</form>
	<?php
		if (isset($_POST['hobby'])) {
			foreach ($_POST['hobby'] as $key=> $val) {
				echo $key .'=>' .$val. '<br />';
			}
		}
	?>
	</body>
</html>
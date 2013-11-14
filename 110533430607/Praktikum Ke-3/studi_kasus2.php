<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<!--

Algoritma :
1. Start
2. Menampilkan Check Box
3. Menampilkan Check Box yang tercentang secara default
4. Centang check box
5. Klik tombol OK
6. Tampil Hasil dari check box yang dicentang

-->
<head> 
<title>Data Checkbox</title> 
</head> 
<body> 
<!-- Form action dikasih script untuk menentukan metode yang digunakan untuk mengelolah script PHP dengan Methode POST-->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Hobby

<!--Menentukan Kondisi Checkbox dengan memberi nilai Membaca-->
<input type="checkbox" name="hobby[]" value="Memainkan Keyboard"
<?php 
if($_POST['hobby'] == 'Memainkan Keyboard'){
echo ' checked="checked"';}
?> 
/>Memainkan Keyboard

<!--Menentukan Kondisi Checkbox dengan memberi nilai Kesenian sebagai checkbox default-->
<input type="checkbox" name="hobby[]" value="Kesenian" <?php 
if(!isset($_POST['hobby']) or $_POST['hobby'] == 'Kesenian'){echo ' checked="checked"';}?>
/>Kesenian
<!--Menentukan Kondisi Checkbox dengan memberi nilai Menyanyi-->
<input type="checkbox" name="hobby[]" value="Menyanyi" 
<?php 
if($_POST['hobby'] == 'Menyanyi'){
echo ' checked="checked"';}
?> 
/>Menyanyi <br /> 
<!--Membuat tombol ok dengan tipe submit-->
<input type="submit" value="ok" /> 
</form> 
<?php 
//kondisi untuk menampilkan hasil dari inputan ceckbox ketika inputan sudah tercentang dan tombol ditekan
if (isset($_POST['hobby'])) { 
foreach ($_POST['hobby'] as $key => $val) { 
echo $key . ' -> ' .$val . '<br />'; 
} 
} 
?> 
</body> 
</html> 
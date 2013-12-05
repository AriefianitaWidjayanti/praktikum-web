<!--
Algoritma :
1. Start
2. Input Bilangan 1 dan Bilangan 2
3. Pilih Operator + atau - atau * atau /
4. Menampilkan Hasil
5. End
 -->
<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Kalkulator</title> 

<!-- Script Java Script-->
<script language="JavaScript">
	//fungsi untuk mengecek validasi yang inputan hanya bisa diisi angka
	function cekangka(a) {
	kar = /^[0-9]{1,}$/;
	return kar.test(a);
	}
		function login(){
		//pendeklarasi variabel bil1 yang diambil dari tekxtbox angka 1
        var bil1=document.form1.angka1.value;
        //pendeklarasi variabel bil2 yang diambil dari tekxtbox angka 2
        var bil2=document.form1.angka2.value;
        
            if( (!cekangka(bil1)) || (!cekangka(bil2)) ){//kondisi jika angka 1 atau angka 2 diinput selain angka
				alert("Bilangan 1 dan 2 harus angka!");
			}
		}
</script>
</head> 
<style type="text/css">
<!--
/* class untuk memberi format jenis , ukuran, dan warna font*/
.style1 {
	font-family: "Bauhaus 93";
	font-size: 24px;
	color: #FFFFFF;
}
/* class untuk memberi format ukuran, dan ketebalan font*/
.style2 {
	font-size: 16px;
	font-weight: bold;
}
/* class untuk memberi format ukuran, dan ketebalan font*/
.style3 {font-size: 14px; font-weight: bold; }
/* class untuk memberi format jenis , ukuran, dan warna font*/
.style4 {font-family: "Bauhaus 93"; font-size: 36px; color: #FFFFFF; }
-->
</style>
<!-- memberi format backgroundcolor, jenis, ukuran font-->
<body style="font-family: 'Trebuchet MS', Arial; font-size:14px; background-color: #0066FF;">
<p align="center" class="style4" >Kalkulator</p>
<center> <!-- memberi posisi ke tengah-->
<!-- memberi format backgroundcolor, ukuran lebar dan panjang kotak-->
<div style="width: 900px; background-color:#666666; height: 400px;" >
<!-- membuat form, memberi format backgroundcolor, ukuran lebar dan panjang kotak, memberi script PHP yang ditangani dengan metode post-->
<form name="form1" method="post" style="width: 250px; background-color:#666666; height:200px; float: none;" action="hitung.php" >
<div class="style1" style="color: #FFFFFF;">
  <p>&nbsp;</p>
  </div>
<div align="left" style="margin:0;">
<div class="style3" style="width:70px; float:left; height: 30px; color: #FFFFFF;">Bilangan 1</div>
    <p>
	<!-- mebuat teksbox bilangan 1-->
      <input name="angka1" type="text" id="angka1" maxlength="15" />
    </p>
    </div>
<div align="left" style="margin:10">
<div class="style3" style="width:70px; float:left; height: 25px; color: #FFFFFF;">Bilangan 2 </div>
</div>
<div align="left" style="margin:10; top: 6px;">
    <p>
		<!-- membuat teksbox bilangan 2-->
      <input name="angka2" type="text" id="angka2" maxlength="15" />
	  	<!-- me,buat dropdown pilihan operator-->
      <select name="operator2" id="operator2">
        <option value="+" <?php if (!isset($_POST['operator2']) or $_POST['operator2'] == '+') {echo 'selected="selected"';}?>>+</option>
        <option value="-" <?php if ($_POST['operator2'] == '-') {echo ' selected="selected"';} ?>>-</option>
        <option value="*" <?php if ($_POST['operator2'] == '*') {echo ' selected="selected"';} ?>>*</option>
        <option value="/" <?php if ($_POST['operator2'] == '/') {echo ' selected="selected"';} ?>>/</option>
      </select>
    </p>
    </div>
<div style="margin:0">
<center>
	<!-- membuat tombol untuk menghitung -->
  <input type="submit" name="Submit2" value="Hitung" onclick="login()"/>
 </center>
  <div style="width:70px; float:none"></div>
<div style="float:left"></div>
</div>
<div align="left" style="margin:0">
  <div class="style2" style="width:70px; float:left; color: #FFFFFF;">Hasil :</div>
  <p>
  <!-- membuat teksbox hasil -->
    <input name="hasil1" type="text" readonly="true" value="<?php if (isset($_GET['hasil1'])) echo $_GET['hasil1']?>"/>
  </p>
</div>
</form>
</div>
</center>
</body>
</html>
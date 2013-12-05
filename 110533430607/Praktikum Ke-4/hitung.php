<?php
//pengambilan isi variable angka 1, angka 2 dan operator
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator2'];

//proses hitung
if ($operator == '+') //kondisi untuk penjumlahan
{
$hasil = $angka1+$angka2;
}
if ($operator == '-')//kondisi untuk pengurangan
{
$hasil = $angka1-$angka2;
}
if ($operator == '*')//kondisi untuk perkalian
{
$hasil = $angka1*$angka2;
}
if ($operator == '/')//kondisi untuk pembagian
{
$hasil = $angka1/$angka2;
}

// —– url redirect sekaligus mengrimkan variable hasil ———
header ("location:calculator.php?hasil1=$hasil");
?>
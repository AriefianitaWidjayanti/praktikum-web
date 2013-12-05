<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--
Algoritma Program
 1. Start
 2. Input Username dan Pssword
 3. Tekan Tombol Login
 4. Jika session dengan nama 'fifi' dan bernilai 'fifi ' ter-set maka akan tampil halaman utama admin
 5. Jika session dengan nama ' fifi' dan bernilai ' fifi' belum ter-set maka tetap tampil halaman login dan teks peringatan
 4. End
-->
        <head>
                <title>Halaman Administrator</title>
                <style type="text/css">
				/* script css untuk mergubah warna background, warna tulisan, tata letak margin, warna border, mengedit jenis border.
				*/
                        body{
                                background-color:#999999;
                                color:blue;
                        }
                        a{
                                color:blue;
                        }
                        .inner{
                                margin: 200px auto; padding: 20px; width:240px; border: 5px solid blue ; border:double;
                        }
                </style>
        </head>

        <body>
                <?php
                        ini_set('display errors',1);
                        define('_VALID',1);
                        // memasukkan include file eksternal
                        require_once('./autentik.php');
                        init_login();                //fungsi untuk mengecek username dan passsword yang diinput
                        validate();                        // fungsi untuk menampilkan login jika session kosong atau perintah logout jika session tidak kosong
                ?>
                <h1 style="text-align:center">Halaman Utama Admin</h1>
                <p style="text-align:right">
                        <a href="?m=Logout">Logout</a>
                </p>
                <div class="inner">
                        
                        Menu-Menu Admin
                        <?php
						//untuk mengatasi nilai session
                                if($_SESSION['login']==''){                        //hapus session jika checkbox tidak dicentang
                                        unset($_SESSION['login']);
                                        session_destroy();
                                        exit;
                                }
                        ?>
                </div>
        </body>
</html>
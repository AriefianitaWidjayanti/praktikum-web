<?php
        defined('_VALID') or die('Not Allowed');
        
        function init_login(){
               
                $nama = 'fifi';        //inisialisasi username
                $pass = 'fifi';        //inisialisasi password
                session_start();        //fungsi untuk mulai session
                if(isset($_POST['nama']) && isset($_POST['pass'])){        //kondisi untuk mengecek nilai user dan password
                        $n = trim($_POST['nama']);
                        $p = trim($_POST['pass']);
                        
                        if(($n === $nama) && ($p === $pass)){                //kondisi mengecek input user dan password
                                if(isset($_POST['remember'])){                        //inisialisasi jika checkbox dicentang
                                        //jika sama,set cookie
                                        $_SESSION['login']=$n;
                                        //redireksi
                                        ?>
                                        <script type="text/javascript">
                                                document.location.href="./";
                                        </script>
                                        <?php
                                }else{
                                        $_SESSION['login']='';                                //inisialisasi jika checkbox tidak dicentang                                        
                                }
                        }else{                                                                                //teks yang ditampilkan jika inputan salah
                                echo '<h1 style="margin:10px auto;text-align:center; color:red;">nama dan password tidak sesuai</h1>';
                                return false;
                        }
                }
        }
        function validate(){
                if(!isset($_SESSION['login'])){                                        //cek ketersediaan session
                        ?>
                        <div class="inner">
                                <form action="" method="post">
                                        <table border="0" cellpadding="5">
                                                <tr>
                                                        <td>Nama</td>
                                                        <td><input type="text" name="nama" /></td>        <!-- tekboks untuk menginput username -->
                                                </tr>
                                                <tr>
                                                        <td>Password</td>
                                                        <td><input type="password" name="pass" /></td> <!-- tekboks untuk menginput password -->
                                                </tr>
                                                <tr>
                                                        <td></td>
                                                        <td><input type="submit" value="Login" /></td>                <!--untuk membuat tombol login bertipe submit-->
                                                </tr>
                                        </table>
                                </form>
                        </div>
                        <?php
                        exit;                                        
                }
                if(isset($_GET['m']) && $_GET['m'] == 'Logout'){        //kondisi jika hyperlink logout diklik
                        //kondisi untuk menghapus session
                        if(isset($_SESSION['login'])){                                
                                unset($_SESSION['login']);
                                session_destroy();
                        }
                        
                        //redireksi halaman
                        ?>
                        <script type="text/javascript">
                                document.location.href="./";
                        </script>
                        <?php
                }
        }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--
Algoritma :
1. Start
2. Menampilkan Username dan Password
4. Pilih Seleksi 
5. Klik tombol Login
6. Tampil Hasil Login
7. End

--> 
<head> 
<title>Login</title> 
<script type="text/javascript">
</script>


</head> 
	   
<body>
        <form name="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
            <table width="225" cellpadding="4">
            <tr><td>Username</td><td><input type="text" name="username"></td></tr>     <!--Membuat input username-->
            <tr><td>Password</td><td><input type="password" name="password"></td></tr>   <!--Membuat input password-->
            <tr><td colspan="2" align="right"><input type="button" value="Login" onClick="Login()">
 </td></tr>

</table>
</form>
<br>
</body>
 
<!--Mengecek huruf-->
    <script language="JavaScript">    
	function cekuser(a) {
	kar = /^[A-Za-z]{1,}$/;<!--nama harus berupa huruf,--!>
	return kar.test(a);
	}
	
	function Login(){

        var username=document.login.username.value;
        //username=username.toLowerCase();

        var password=document.login.password.value;
        //password=password.toLowerCase();
       
            if (username=="fifi" && password=="fifi"){
				alert("Selamat Datang "+username+" di Program kami : ");
            }
			else if(username== "" && password == ""){
				document.forms.login.username.focus();
			}
			else if(password == ""){
				document.forms.login.password.focus();
			}			
			else if(username == ""){
				document.forms.login.username.focus();
			}
			else if((!cekuser(username)) && (!cekuser(password))){
				alert("Username dan Password harus huruf!");
			}
			else if(!cekuser(username)){
				alert("User harus huruf!");
			}
			else if(!cekuser(password)){
				alert("Password harus huruf!");
			}
			else{
				alert("User name dan password anda salah!");
            }
        }
        </script>
</html> 
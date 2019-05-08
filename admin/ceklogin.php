<?php 

	session_start();

	include("../lib/koneksi.php");

	$username = $_POST ['username'];
	$password = md5($_POST['password']);

	$cek		= mysqli_query($conn, "select * from tbl_admin 
					where username='$username'
					and password='$password'");

	$data		=mysqli_fetch_array($cek);
	$jumlah 	=mysqli_num_rows($cek);

	if ($jumlah>0) {

		$_SESSION ['username'] = $data['username'];
		$_SESSION ['password'] = $data['password'];

		echo"Login Berhasil !!!";
		echo "<meta http-equiv='refresh'
				content='1; url=admin.php'>";

		}else{

			echo "<center> Gagal, Username atau Password Salah !!! <br>
					<br> <a href='index.php'> ULANGI </a> </br></center>";
		}
 ?>
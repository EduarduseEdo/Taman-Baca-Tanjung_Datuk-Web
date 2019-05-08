<?php 
	
	if(isset($_GET['tampil'])) $tampil = $_GET['tampil'];
	else $tampil = "beranda";

	if($tampil == "beranda")	include("beranda.php");
	elseif($tampil == "keluar")	include("keluar.php");


//  Tentang  -----------------------------------------

	elseif ($tampil == "tentang")
			include("tentang/tentang_tampil.php");
		
	elseif ($tampil == "tentang_edit")
			include("tentang/tentang_edit.php");

	elseif ($tampil == "tentang_editproses")
			include("tentang/tentang_editproses.php");
		
// Tentang --------------------------------------------


	elseif ($tampil == "donasi")
			include("donasi/donasi_tampil.php");

	elseif ($tampil == "donasi_tambah")
			include("donasi/donasi_tambah.php");

	elseif ($tampil == "donasi_tambahproses")
			include("donasi/donasi_tambahproses.php");

	elseif ($tampil == "donasi_edit")
			include("donasi/donasi_edit.php");

	elseif ($tampil == "donasi_editproses")
			include("donasi/donasi_editproses.php");
		
	elseif ($tampil == "donasi_hapus")
			include("donasi/donasi_hapus.php");



//  Galeri -----------------------------------------

	elseif ($tampil == "buku")
			include("buku/buku_tampil.php");

	elseif ($tampil == "buku_tambah")
			include("buku/buku_tambah.php");

	elseif ($tampil == "buku_tambahproses")
			include("buku/buku_tambahproses.php");

	elseif ($tampil == "buku_edit")
			include("buku/buku_edit.php");

	elseif ($tampil == "buku_editproses")
			include("buku/buku_editproses.php");
		
	elseif ($tampil == "buku_hapus")
			include("buku/buku_hapus.php");


//  Kontak------------------------------------


	elseif ($tampil == "kontak")
			include("kontak/kontak_tampil.php");
		
	elseif ($tampil == "kontak_edit")
			include("kontak/kontak_edit.php");

	elseif ($tampil == "kontak_editproses")
			include("kontak/kontak_editproses.php");
		
//  Kontak-------------------------------------

//  User -----------------------------------------

	elseif ($tampil == "user_edit")
			include("user/user_edit.php");
	elseif ($tampil == "user_editproses")
			include("user/user_editproses.php");

		else echo "Konten Tidak Ada";

 ?>
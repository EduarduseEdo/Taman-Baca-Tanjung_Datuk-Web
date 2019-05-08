<div class="content-wrapper"> 
<?php 
	
	$nama_gambar   = $_FILES['gambar'] ['name'];
	$lokasi_gambar = $_FILES['gambar'] ['tmp_name'];
	$tipe_gambar   = $_FILES['gambar'] ['type'];

	$tanggal	= date('Ymd');

	if($lokasi_gambar=="") {
		$input = mysqli_query ($conn, "insert into tbl_buku set
				judul_buku	='$_POST[judul_buku]',
				kategori	='$_POST[kategori]',
				penerbit	='$_POST[penerbit]'
			") or die (mysqli_error($conn));
	} else {
		move_uploaded_file($lokasi_gambar, "../images/buku/$nama_gambar");
		$input = mysqli_query($conn, "insert into tbl_buku set
				judul_buku	='$_POST[judul_buku]',
				kategori	='$_POST[kategori]',
				penerbit	='$_POST[penerbit]',
				gambar 		='$nama_gambar'
			") or die (mysqli_error($conn));
	}

	if ($input){
		echo "Data Telah Tersimpan..!!";
		echo "<meta http-equiv='refresh' content='1;
		url=?tampil=buku'>";
	}
 ?>
</div>
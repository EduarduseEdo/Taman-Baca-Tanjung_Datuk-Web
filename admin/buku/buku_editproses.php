<div class="content-wrapper">  
<?php 

	$nama_gambar   = $_FILES['gambar'] ['name'];
	$lokasi_gambar	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];

	if ($lokasi_gambar=="") {
		$edit = mysqli_query($conn, "update tbl_buku set 
			judul_buku	= '$_POST[judul_buku]',
			kategori	= '$_POST[kategori]',
			penerbit	= '$_POST[penerbit]'
			where id_buku = '$_POST[id]'")
		or die (mysqli_error($conn));
	} else{
		$data = mysqli_fetch_array(mysqli_query($conn,
			"select *from tbl_buku where id_buku ='$_POST[id]'"));

		if ($data['gambar'] !="")
			unlink("../images/buku/$data[gambar]");
		move_uploaded_file($lokasi_gambar, "../images/buku/$nama_gambar");

		$edit = mysqli_query($conn, "update tbl_buku set 
			judul_buku	= '$_POST[judul_buku]',
			kategori	= '$_POST[kategori]',
			penerbit	= '$_POST[penerbit]',
			gambar 		= '$nama_gambar'
		where id_buku = '$_POST[id]'")
		or die (mysqli_error($conn));
	}

	if ($edit) {
		echo "Data Berhasil diedit..!!";
		echo "<meta http-equiv='refresh'
				content='1; url=?tampil=buku'>";
	}
 ?>
</div>
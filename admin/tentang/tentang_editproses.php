<div class="content-wrapper">
		
	<?php 

		$nama_gambar   	= $_FILES['gambar']['name'];
		$lokasi_gambar	= $_FILES['gambar']['tmp_name'];
		$tipe_gambar	= $_FILES['gambar']['type'];

		$isi			= addslashes($_POST['sejarah']);

		if ($lokasi_gambar=="") {
			$edit = mysqli_query($conn, "update tbl_tentang set 
				sejarah 		 = '$isi'
				where id_tentang = '$_POST[id]'")
			or die (mysqli_error($conn));
		} else{
			$data = mysqli_fetch_array(mysqli_query($conn,
				"select *from tbl_tentang
				where id_tentang ='$_POST[id]'"));

			if ($data['gambar'] !="")
				unlink("../images/tentang/$data[gambar]");
			move_uploaded_file($lokasi_gambar, "../images/tentang/$nama_gambar");

			$edit = mysqli_query($conn, "update tbl_tentang set 
				sejarah 		= '$isi',
				gambar 			= '$nama_gambar'
			where id_tentang 	= '$_POST[id]'")
			or die (mysqli_error($conn));
		}

		if ($edit) {
			echo "Data Berhasil diedit..!!";
			echo "<meta http-equiv='refresh'
					content='1; url=?tampil=tentang'>";
		}
	 ?>
</div>
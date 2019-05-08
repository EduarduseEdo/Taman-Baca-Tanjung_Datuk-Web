<div class="content-wrapper">
	<?php 
		$tanggal		= date('Ymd');
		$data = mysqli_query($conn, "update tbl_donasi set
				nama_donatur				='$_POST[nama_donatur]',
				jmlh_buku					='$_POST[jmlh_buku]',
				alamat						='$_POST[alamat]',
				kode_pos					='$_POST[kode_pos]',
				status_pengiriman			='$_POST[status_pengiriman]',
				tanggal 					='$tanggal'
				where id_donasi 			='$_POST[id]'") or die (mysqli_error($conn));

		if ($data) {
			echo "Data Berhasil diedit..!!";
			echo "<meta http-equiv='refresh'
					content='1; url=?tampil=donasi'>";
		}
	 ?>
</div>
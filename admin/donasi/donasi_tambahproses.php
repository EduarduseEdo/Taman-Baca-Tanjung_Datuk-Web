<div class="content-wrapper"> 
<?php 
	include("lib/koneksi.php");
	$tanggal		= date('Ymd');

		$input = mysqli_query ($conn, "insert into tbl_donasi set
				nama_donatur				='$_POST[nama_donatur]',
				jmlh_buku					='$_POST[jmlh_buku]',
				alamat						='$_POST[alamat]',
				kode_pos					='$_POST[kode_pos]',
				status_pengiriman			='$_POST[status_pengiriman]',
				tanggal 					='$tanggal'
				") or die (mysqli_error($input));
	

	if ($input){
		echo "Data Telah Tersimpan..!!";
		echo "<meta http-equiv='refresh' content='1;
		url=?tampil=donasi'>";
	}
 ?>
</div>
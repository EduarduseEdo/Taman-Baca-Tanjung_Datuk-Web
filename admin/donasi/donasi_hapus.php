<div class="content-wrapper"> 
<?php 
	
	// $data = mysqli_fetch_array(mysqli_query($koneksi, "select *from tbl_agenda 
	// 	where agenda_id ='$_GET[id]'"));

	// if ($data['gambar'] !="")
	// 	unlink("../images/agenda/$data[gambar]");

	$hapus = mysqli_query($conn, "delete from tbl_donasi where 
		id_donasi= '$_GET[id]'") or die (mysqli_error($conn));

	if ($hapus) {
		echo "Data Telah dihapus";
		echo "<meta http-equiv='refresh'
				content='1; url=?tampil=donasi'>";
	}
 ?>
</div>
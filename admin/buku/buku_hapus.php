<div class="content-wrapper"> 
<?php 
	
	$data = mysqli_fetch_array(mysqli_query($conn, "select *from tbl_buku 
		where id_buku ='$_GET[id]'"));

	if ($data['gambar'] !="")
		unlink("../images/buku/$data[gambar]");

	$hapus = mysqli_query($conn, "delete from tbl_buku where 
		id_buku= '$_GET[id]'") or die (mysqli_error($conn));

	if ($hapus) {
		echo "Data Telah dihapus";
		echo "<meta http-equiv='refresh'
				content='1; url=?tampil=buku'>";
	}
 ?>
</div>
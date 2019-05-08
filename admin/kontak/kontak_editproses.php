<div class="content-wrapper">
		
	<?php 

		$edit = mysqli_query($conn, "update tbl_kontak set 
				email 			= '$_POST[email]',
				no_hp 			= '$_POST[no_hp]',
				alamat 			= '$_POST[alamat]'
			where id_kontak 	= '$_POST[id]'")
			or die (mysqli_error($conn));

		if ($edit) {
			echo "Data Berhasil diedit..!!";
			echo "<meta http-equiv='refresh'
					content='1; url=?tampil=kontak'>";
		}
	 ?>
</div>
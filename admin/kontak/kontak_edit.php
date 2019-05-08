<div class="content-wrapper"> 
	<?php 
		if (!defined("INDEX")) die ("---");
		
		$tampil = mysqli_query($conn, "select *from tbl_kontak
		where id_kontak ='$_GET[id]'") or die (mysqli_error($conn));
		$data 	= mysqli_fetch_array($tampil);
	 ?>
	 
	<section class="content">
		 <h2 class="sub-header">EDIT Data Kontak</h2>

		 <form name="edit" method="post" action="?tampil=kontak_editproses"
		 		enctype="multipart/form-data" class="form-horizontal">
		 			<input type="hidden" name="id"
		 			value="<?= $data['id_kontak']; ?>">

		 	 	<div class="form-group">
			 		<label class="label-control col-md-2">E-mail</label>
			 		<div class="col-md-4">
			 			<input type="text" class="form-control" name="email"
			 			size="50" value="<?= $data['email']; ?>"> 
			 		</div>
			 	</div>

			 	<div class="form-group">
			 		<label class="label-control col-md-2">Nomor Heandphone</label>
			 		<div class="col-md-4">
			 			<input type="text" class="form-control" name="no_hp"
			 			size="50" value="<?= $data['no_hp']; ?>"> 
			 		</div>
			 	</div>

			 	<div class="form-group">
			 		<label class="label-control col-md-2">Alamat</label>
			 		<div class="col-md-4">
			 			<input type="text" class="form-control" name="alamat"
			 			size="50" value="<?= $data['alamat']; ?>"> 
			 		</div>
			 	</div>

		 	<div class="form-group">
		 		<label class="label-control col-md-2"></label>
		 		<div class="col-md-4">
		 			<input type="submit" name="edit" value="SIMPAN" class="btn btn-primary">
		 		</div>
		 	</div>
		 </form>
	</section>
</div>
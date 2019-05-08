<div class="content-wrapper"> 
	<?php 
		if (!defined("INDEX")) die ("---");
		
		$tampil = mysqli_query($conn, "select *from tbl_tentang
		where id_tentang ='$_GET[id]'") or die (mysqli_error($conn));
		$data 	= mysqli_fetch_array($tampil);
	 ?>
	 
	<section class="content">
		 <h2 class="sub-header">EDIT Data Sejarah Singkat</h2>

		 <form name="edit" method="post" action="?tampil=tentang_editproses"
		 		enctype="multipart/form-data" class="form-horizontal">
		 			<input type="hidden" name="id"
		 			value="<?= $data['id_tentang']; ?>">

		 		<div class="form-group">
		 			<label class="label-control col-md-2">Foto</label>
		 			<div class="col-md-4">
		 				<img src="../images/tentang/<?= $data['gambar']; ?>"
		 					width="300" class="thumbnail">
		 				<input type="file"  name="gambar">
		 			</div>
		 		</div>

		 	 	<div class="form-group">
			 		<label class="label-control col-md-2"> Isi Sejarah Singkat</label>
			 		<div class="col-md-9">
			 			<textarea name="sejarah" cols="100" rows="15" class="form-
			 			control"> <?= $data ['sejarah']; ?></textarea>
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
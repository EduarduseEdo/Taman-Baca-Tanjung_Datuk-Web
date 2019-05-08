<?php 
	if (!defined("INDEX")) die ("---");

	$sql = mysqli_query($conn, "select *from tbl_admin")
			or die(mysqli_error($conn));
	$data = mysqli_fetch_array($sql);
 ?>

 <div class="content-wrapper">
	<section class="content">
		<h2 class="sub-header">Edit Profil</h2>

		 <form name="edit" method="post" action="?tampil=user_editproses" class="form-horizontal">
		 		<input type="hidden" name="id" value="<?= $data['user_id']; ?>">
<!-- 
			<div class="form-group">
		 		<label class="label-control col-md-2"> Nama </label>
		 		<div class="col-md-4">
		 			<input type="text" class="form-control" name="nama"
		 			size="50" value="<?= $data['nama']; ?>"> 
		 		</div>
		 	</div> -->

		 	<div class="form-group">
		 		<label class="label-control col-md-2"> Username </label>
		 		<div class="col-md-4">
		 			<input type="text" class="form-control" name="username"
		 			size="50" value="<?= $data['username']; ?>"> 
		 		</div>
		 	</div>

		 	<div class="form-group">
		 		<label class="label-control col-md-2"> Ganti Password </label>
		 		<div class="col-md-4">
		 			<input type="password" class="form-control" name="password"
		 			size="50"> 
		 		</div>
		 	</div>

		 	<div class="form-group">
		 		<label class="label-control col-md-2"> Ulangi Password</label>
		 		<div class="col-md-4">
		 			<input type="password" class="form-control" name="password_ulang"
		 			size="50"> 
		 		</div>
		 	</div>

		 	<div class="form-group">
		 		<label class="label-control col-md-2"></label>
		 		<div class="col-md-4">
		 			<input type="submit" name="edit" value="Ubah Profil" class="btn btn-primary">
		 		</div>
		 	</div>
		</form>
	</section>
</div>
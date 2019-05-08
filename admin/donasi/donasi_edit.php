<div class="content-wrapper"> 
	<?php 
		if (!defined("INDEX")) die ("---");
		
		$tampil = mysqli_query($conn, "select *from tbl_donasi
		where id_donasi ='$_GET[id]'") or die (mysqli_error($conn));
		$data 	= mysqli_fetch_array($tampil);
	 ?>
	 
	<section class="content">
		 <h2 class="sub-header">EDIT Donasi</h2>

		 <form name="edit" method="post" action="?tampil=donasi_editproses"
		 		enctype="multipart/form-data" class="form-horizontal">
		 			<input type="hidden" name="id_donasi"
		 			value="<?= $data['id_donasi']; ?>">

		 		<div class="form-group">
			 		<label class="label-control col-md-2">Nama Donatur</label>
			 		<div class="col-md-4">
			 			<input type="text" class="form-control" name="nama_donatur"
			 			size="50" value="<?= $data['nama_donatur']; ?>"> 
			 		</div>
			 	</div>
			 	<div class="form-group">
			 		<label class="label-control col-md-2">Jumlah Buku</label>
			 		<div class="col-md-4">
			 			<input type="text" class="form-control" name="jmlh_buku"
			 			size="50" value="<?= $data['jmlh_buku']; ?>"> 
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
			 		<label class="label-control col-md-2">Kode Pos</label>
			 		<div class="col-md-4">
			 			<input type="text" class="form-control" name="kode_pos"
			 			size="50" value="<?= $data['kode_pos']; ?>"> 
			 		</div>
			 	</div>

			 	<div class="form-group">
					<label class="label-control col-md-2"> Status Pengiriman</label>
					<div class="col-md-4">
						<select class="form-control" name="status_pengiriman" required>
							<option selected><?= $data['status_pengiriman']; ?></option>
							<option value="Terkirim">Terkirim</option>
							<option value="Pending">Pending</option>
							<option value="Dalam Pengiriman">Dalam Pengiriman</option>
						</select>
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
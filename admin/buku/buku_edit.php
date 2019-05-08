<?php 
	if (!defined("INDEX")) die ("---");

	$tampil = mysqli_query($conn, "select *from tbl_buku
	where id_buku='$_GET[id]'") or die (mysqli_error());
	$data 	= mysqli_fetch_array($tampil);
 ?>
 
<div class="content-wrapper">  
	<br>
	<section class="content-header">
        <h1>
          EDIT DATA BUKU
        </h1>
    </section>
 
	<section class="content">

		 <form name="edit" method="post" action="?tampil=buku_editproses"
		 		enctype="multipart/form-data" class="form-horizontal">
		 			<input type="hidden" name="id"
		 			value="<?= $data['id_buku']; ?>">
		 	<div class="form-group">
		 		<label class="label-control col-md-2"> Judul Buku</label>
		 		<div class="col-md-4">
		 			<input type="text" class="form-control" name="judul_buku"
		 			size="50" value="<?= $data['judul_buku']; ?>"> 
		 		</div>
		 	</div>

		 	<div class="form-group">
		 		<label class="label-control col-md-2"> Gambar</label>
		 		<div class="col-md-4">
		 			<img src="../images/buku/<?= $data['gambar']; ?>"
		 			width="300" class="thumbnail">
		 			<input type="file"  name="gambar">
		 		</div>
		 	</div>

		 	<div class="form-group">
				<label class="label-control col-md-2"> Kategori</label>
				<div class="col-md-4">
					<select class="form-control" name="kategori" required>
						<option selected><?= $data['kategori'] ?></option>
						<option value="Buku Pelajaran">Buku Pelajaran</option>
						<option value="Buku Cerita">Buku Cerita</option>
						<option value="Buku Bergambar">Buku Bergambar</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Penerbit</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="penerbit"
		 			size="50" value="<?= $data['penerbit']; ?>"> 
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
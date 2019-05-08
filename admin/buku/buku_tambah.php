<?php 
	if (!defined ("INDEX")) die ("---");
 ?>
 
  <div class="content-wrapper"> 
 	<section class="content-header">
        <h1>
          Tambah Buku 
        </h1>
      </section>


	<section class="content">
		<form name="tambah" method="post"
			action="?tampil=buku_tambahproses"
				enctype="multipart/form-data" class="form-horizontal" data-toggle="validator">

			<div class="form-group">
				<label class="label-control col-md-2"> Judul Buku</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="judul_buku" size="50" placeholder="--isi Judul buku--" required>
				</div>		
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Gambar</label>
				<div class="col-md-4">
					<input type="file" name="gambar" >
				</div>
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Kategori</label>
				<div class="col-md-4">
					<select class="form-control" name="kategori" required>
						<option selected>Pilih....</option>
						<option value="Buku Pelajaran">Buku Pelajaran</option>
						<option value="Buku Cerita">Buku Cerita</option>
						<option value="Buku Bergambar">Buku Bergambar</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Penerbit</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="penerbit" size="50" placeholder="--isi penerbit--" required>
				</div>		
			</div>

			

			<div class="form-group">
				<label class="label-control col-md-2"></label>
				<div class="col-md-4">
					<input type="submit" name="tambah" value="SIMPAN" class="btn btn-primary">
				</div>
			</div>
		</form>
	</section>
</div>

<?php 
	if (!defined ("INDEX")) die ("---");
 ?>
 
  <div class="content-wrapper"> 
 	<section class="content-header">
        <h1>
          Tambah Donasi 
        </h1>
      </section>


	<section class="content">
		<form name="tambah" method="post"
			action="?tampil=donasi_tambahproses"
				enctype="multipart/form-data" class="form-horizontal" data-toggle="validator">

			<div class="form-group">
				<label class="label-control col-md-2"> Nama Donatur</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="nama_donatur" size="50" placeholder="--isi nama donatur--" required>
				</div>		
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Jumlah Buku</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="jmlh_buku" size="50" placeholder="--50--" required>
				</div>
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Alamat</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="alamat" size="50" placeholder="--jl. kokookkk--" required>
				</div>
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Kode Pos</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="kode_pos" size="50" placeholder="--443532--" required>
				</div>
			</div>

			<div class="form-group">
				<label class="label-control col-md-2"> Status Pengiriman</label>
				<div class="col-md-4">
					<select class="form-control" name="status_pengiriman" required>
						<option selected>Pilih....</option>
						<option value="Terkirim">Terkirim</option>
						<option value="Pending">Pending</option>
						<option value="Dalam Pengiriman">Dalam Pengiriman</option>
					</select>
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
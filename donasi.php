<!DOCTYPE html>
<html>
  <head>
    <?php include "head.php" ?>
    <!-- styles -->
    <link href="css/styles2.css" rel="stylesheet">   
   
  </head>
  <body>
	  <?php include "navigator.php";
				  Nav("donasi");
		?>
<div>
	<div class="page-content container">
		<div class="row" >
			<div class="col-md-12 col-md-offset-1">
				<div class="content-box-large">
			        <div class="box">
			            <div class="content-wrap">
			               

	<form action="#" method="post">
	    <fieldset>
		<div class="form-group">
				<label>Nama</label>
				<input class="form-control" placeholder="Nama" type="text" name="Nama">
		</div>
		
			
			
		<div class="form-group">
				<label>Jumlah Buku</label>
				<input class="form-control" placeholder="Jumlah Buku" type="text" name="Mail">
		</div>
		
		<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" placeholder="Alamat Sekarang" type="text" name="Kontak">
		</div>
		
		<div class="form-group">
				<label>Kode Pos</label>
				<input class="form-control" placeholder="Kode Pos" type="text" name="Mail">
		</div>
		
		<div class="form-group">
				<label>Tanggal</label>
				<input class="form-control" placeholder="Tanggal" type="text" name="Mail">
		</div>
		
		<div class="form-group">
				<label>Status Pengiriman</label>
				<select class="form-control" id="exampleFormControlSelect1" name="kendaraan" >
					<option>-</option>
					<option>Kendaraan Pribadi</option>
					<option>Ambulan</option>
					<option>Lain-lain</option>
				</select>
			</div>
			
		
										 
			
		
		</fieldset>
			<input class="btn btn-primary signup" type="submit" name="Kirim" value="Kirim">
	</form>
             			</div>
			        </div>
			   </div>
			</div>
		</div>
	</div>
	</div>
	<?php
		include "footer.php"; 
	?>
  </body>
</html>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.offline.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

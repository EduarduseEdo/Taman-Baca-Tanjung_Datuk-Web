 <!-- Include database -->
<?php include("lib/koneksi.php"); ?>
 <!-- Include database -->

<html>
  <head>
  	<?php
    include "head.php";
	 ?>
  </head>
  <body>
 		<?php
		 include "navigator.php";
		 Nav("kontak");
		 ?>
	<br>
	
<div class="container">
       <div class="row text-center">
	  
          <div class="col-md-6 text-justify">
             <div class="card" id="tentang">
                <div class="card-body">
                   <h3><strong>Map Taman Baca Tanjung Datuk</strong></h3>

                   <?php 

                    $tampil = mysqli_query($conn, "select *from tbl_tentang")
                        or die (mysqli_error());
                        while ($data=mysqli_fetch_array($tampil)) {
							
                   ?>
                    <div class="card-body">
                      <img src="images/tentang/<?=$data['gambar']; ?>" 
                         width="100%" height="50%">
                    </div>
                   <p> <?=$data['sejarah'] ?> </p>

                   <?php }  ?>
                </div>
             </div>
          </div>
		  <div class="col-md-6 text-justify">
			<div class="row">
					<div class="col-md-6" >
						 <div class="card" id="donasi">
							<div align="center">
							<img class="card-img-top "  src="images/kontak.png" alt="Card image cap" style="max-height:150px; max-width:152px; padding-top:10px;">
						 </div>	
							<div class="card-body">
							   <h4 class="card-title">Phone Number</h4>
							   <?php 

								$tampil = mysqli_query($conn, "select *from tbl_kontak")
								or die (mysqli_error());
								while ($data=mysqli_fetch_array($tampil)) {
							
								?>
							   <p class="card-text"><?=$data['no_hp'] ?></p>
					
							   <?php }  ?>
							   
							   
							</div>
						 </div>
						 
					</div>
					  
					  
						<div class="col-md-6">
						 <div class="card" id="list">
							<div align="center">
							<img class="card-img-top "  src="images/mail.png" alt="Card image cap" style="max-height:150px; max-width:152px; padding-top:10px;">
						 </div>	
							<div class="card-body">
							   <h4 class="card-title">E-Mail</h4>
							   <?php 

								$tampil = mysqli_query($conn, "select *from tbl_kontak")
								or die (mysqli_error());
								while ($data=mysqli_fetch_array($tampil)) {
							
								?>
							   <p class="card-text"><?=$data['email'] ?></p>
					
							   <?php }  ?>
							</div>
						 </div>
					</div>
					
					</div>
					<div class="row" style="padding-top:10px;">
					<div class="col-md-6">
						 <div class="card" id="donasi">
						<div align="center">
							<img class="card-img-top "  src="images/adress.png" alt="Card image cap" style="max-height:150px; max-width:152px; padding-top:10px;">
						 </div>	
							<div class="card-body">
							   <h4 class="card-title">Alamat</h4>
							   <?php 

								$tampil = mysqli_query($conn, "select *from tbl_kontak")
								or die (mysqli_error());
								while ($data=mysqli_fetch_array($tampil)) {
							
								?>
							   <p class="card-text"><?=$data['alamat'] ?></p>
					
							   <?php }  ?>
							   
							  
							</div>
						 </div>
					</div>					   
					<div class="col-md-6">
						 <div class="card" id="kontak">
						 <div align="center">
							<img class="card-img-top "  src="images/jam.png" alt="Card image cap" style="max-height:150px; max-width:152px; padding-top:10px;">
						 </div>	
							<div class="card-body">
							   <h4 class="card-title">Jam Operasional</h4>
							   <p class="card-text">Senin-Jum'at (09.00-17.00)</p>
							   
							   
							</div>
						 </div>
					 </div>
					</div>
				</div>
				


           </div>
		  </div>
     <br>
	 <br>
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

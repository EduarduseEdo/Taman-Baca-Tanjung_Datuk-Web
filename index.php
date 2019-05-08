 <!-- Include database -->
<?php include("lib/koneksi.php"); ?>
 <!-- Include database -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "head.php" ?>
    <link href="dataTables/datatables.min.css" rel="stylesheet">
    <style>
       .shadow{
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
       }

      .to_top{
          display: inline-block;
          padding: 6px 10px;
          border: 0.15em solid #000;
          position: fixed;
          right: 10px;
          background-color: #1361aa;
          color: #fff;
          cursor: pointer;
          bottom: 10px;
          font-weight: bold;
      }

    </style>
  </head>
	
  <body>
    <?php include "navigator.php"; 
           Nav("beranda"); 
    ?>

    <div class="jumbotron jumbotron-fluid text-center">
       <h2 class="display-7"><b>Taman Baca Tanjung Datuk</b></h2>
       <p class="lead">Jl. Raya Liku Kecamatan Paloh, Kabupaten Sambas, Kalimantan Barat 79466</p>
    </div>
    <div class="container" id="a">
      <div class="row">	
         <div class="col-md-8">	
         <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="500">
                  <img src="images/slider/1.jpg" class="d-block w-100" alt="..."> 
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item" data-interval="500">
                  <img src="images/slider/2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item" data-interval="500">
                  <img src="images/slider/3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
         </div>
   <div class="embed-responsive embed-responsive-16by9 col-md-4">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cPCFfE1vKvA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Efy94PTca94?rel=0&autoplay=1"></iframe> -->
           </div>
      </div>
   </div>
    <div class="container">
       <div class="row text-center">
          <div class="col-lg-6 offset-lg-3">Click outside the blue container to select this <strong>row</strong>. Columns are always contained within a row. <strong>Rows are indicated by a dashed grey line and rounded corners</strong>. </div>
       </div>
       <hr>
       <br> 	   
	   
    <div class="row">
        <div class="col-md-4">
             <div class="card" id="donasi">
                <img class="card-img-top" src="images/donasi1.png" alt="Card image cap">
                <div class="card-body">
                   <h4 class="card-title">Donasi</h4>
                   <p class="card-text">Donasi dari anda membantu anak-anak dalam menimba ilmu.</p>
                   <br><br>
                   <a href="donasi.php" class="btn btn-primary"><b>Donasi Sekarang >></b></a>
                </div>
             </div>
        </div>
		  
		  
		    <div class="col-md-4">
             <div class="card" id="list">
                <img class="card-img-top" src="images/list.png" alt="Card image cap">
                <div class="card-body">
                   <h4 class="card-title">Daftar Buku</h4>
                   <p class="card-text">Buku yang anda donasikan tercantum disini.</p>
                   <br>
                   <a href="daftar_buku.php" class="btn btn-primary"><b>Lihat List Buku >></b></a>
                </div>
             </div>
        </div>
		  
		   
		    <div class="col-md-4">
             <div class="card" id="kontak">
                <img class="card-img-top" src="images/card.png" alt="Card image cap">
                <div class="card-body">
                   <h4 class="card-title">Kontak</h4>
                   <p class="card-text">Jika ada perlu silahkan kontak kami insya allah berkah.</p>
                   <br>
                   <a href="kontak.php" class="btn btn-primary"><b>Kontak Admin >></b></a>
                </div>
             </div>
         </div>
    </div>
	   <br>

 <!-- Profil taman baca -->

     <div class="row">
          <div class="col-md-12 text-justify">
             <div class="card" id="tentang">
                <div class="card-body">
                   <h3>Profil <strong>Tanjung Datuk</strong></h3>

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
        </div>
<!-- Profil taman baca -->
      <hr>
      <span class="to_top">Go to top</span>
    <?php include "footer.php" ?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.offline.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
      $(function(){
          $('.to_top').hide().on('click', function(){
              $('body,html').animate({scrollTop : 0}, 800);
          });
          $(window).on('scroll', function(){
              if($(this).scrollTop() > 50){
                  $('.to_top').show();
              }else{
                  $('.to_top').hide();
              }
          });
      });
    </script>

  </body>

</html>

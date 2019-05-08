 <!-- Include database -->
<?php include("lib/koneksi.php"); ?>
 <!-- Include database -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include "head.php";
    ?>
    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="dataTables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
    <!-- Naviiiiigator -->
    <?php 
        include "navigator.php";
        Nav("daftarbuku");
      ?>
     <!-- Naviiiiigator -->

    <div class="container">
      <div class="page-header">
        <br>
        <h2><b>Daftar Buku</b></h2>      
      </div>
      <!-- tabel -->
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
        <table id="tabel-data" class="table table-striped table-bordered ">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Judul Buku</th>
                      <th>Kategori</th>
                      <th>Penerbit</th>
                      <th>Gambar</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>No</th>
                      <th>Judul Buku</th>
                      <th>Kategori</th>
                      <th>Penerbit</th>
                      <th>Gambar</th>
                  </tr>
              </tfoot>

              <tbody>
              <?php 
                $no=1;
                $tampil = mysqli_query($conn, "select *from tbl_buku")
                 or die (mysqli_error($conn));
                while ($data=mysqli_fetch_array($tampil)) {
                
               ?>
                  <tr>
                      <td><?= $no; ?></td>
                      <td><?= $data['judul_buku']; ?></td>
                      <td><?= $data['kategori']; ?></td>
                      <td><?= $data['penerbit']; ?></td>
                      <td style="text-align: center; width: 5%;"><img src="images/buku/<?= $data['gambar']; ?>" 
                        width="30" height="30"></td>
                  </tr>

                        <?php 
                  $no++;
                }
              ?>      
              </tbody>
      </table>
        </div>
      </div>
      <!-- !tabel -->
      </div>

         <hr>
         <span class="to_top">Go to top</span>
         <?php
            include "footer.php";
         ?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
   <!--  <script src="js/jquery-3.2.1.min.js"></script> -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.offline.js"></script>
    <!-- <script src="js/jquery-3.1.0.js"></script> -->
    <script src="datatable/tabel/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <!-- <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script> -->
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>


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

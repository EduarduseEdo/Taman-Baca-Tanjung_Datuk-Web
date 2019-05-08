<div class="content-wrapper">
      <section class="content-header">
        <h1>
          DAFTAR BUKU
        </h1>

        <ol class="breadcrumb">
              <div class="pull-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><span class="glyphicon glyphicon-plus">
                  Buku
                </button>
              </div>
              <br>
        </ol>
      </section>
      <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-warning">
            
            <!-- /.box-header -->
            
            <div class="box-body">
              
              
              <div class="table-responsive">
                  
                <!-- Naviiiiigator -->
                
                 <!-- Naviiiiigator -->

                <div class="container">
                  

                  <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
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
                             or die (mysqli_error());
                            while ($data=mysqli_fetch_array($tampil)) {
                            
                           ?>
                              <tr>
                                  <td style="text-align: center; width: 5%;"><?= $no; ?></td>
                                  <td style="text-align: center; width: 15%;"><?= $data['judul_buku']; ?></td>
                                  <td style="text-align: center; width: 10%;"><?= $data['kategori']; ?></td>
                                  <td style="text-align: center; width: 10%;"><?= $data['penerbit']; ?></td>
                                  <td style="text-align: center; width: 5%;"><img src="../images/buku/<?= $data['gambar']; ?>" 
                                    width="30" height="30"></td>
                              </tr>

                                    <?php 
                              $no++;
                            }
                          ?>      
                          </tbody>
                  </table>

                  <!-- Modal -->
                   <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Form Tambah Data Buku</h4>
                          </div>
                          <div class="modal-body">
                            <form action="" enctype="multipart/form-data" method="POST" class="form-horizontal">
                              <div class="form-group">
                                <label class="label-control col-md-2"> Judul Buku</label>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" name="judul_buku" size="50" placeholder="--isi Judul buku--" required>
                                </div>    
                              </div>
                              <div class="form-group">
                                <label class="label-control col-md-2"> Gambar</label>
                                <div class="col-md-10">
                                  <input type="file" name="gambar" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="label-control col-md-2"> Kategori</label>
                                <div class="col-md-10">
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
                                <div class="col-md-10">
                                  <input type="text" class="form-control" name="penerbit" size="50" placeholder="--isi penerbit--" required>
                                </div>    
                              </div>
                            
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="reset" class="btn btn-info">Reset</button>
                              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- end modal -->
                    
                </div>
				  
				</div>
			  </div>
			</div>
		  </div>
		</div>
		</div>
		
		  </section>
</div>
                <!-- <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script> -->

 <?php
  if(isset($_POST['simpan'])){
    $judul_buku = $_POST['judul_buku'];
    $kategori   = $_POST['kategori'];
    $penerbit   = $_POST['penerbit'];

    // upload gambar
    $nama_gambar = $_FILES['gambar']['name'];
    $ext = strtolower(pathinfo($nama_gambar,  PATHINFO_EXTENSION));
    $nama_baru = "Gambar-".time().".".$ext;
    // validasi input gambar
    $valid  = array('jpeg','jpg','png','PNG','JPEG','JPG');
    if(!in_array($ext, $valid)){
       ?>
        <script>
          alert("extensi file tidak valid");
          window.location.href="admin.php?tampil=buku";
        </script>
       <?php
    }else{
      $sum = $_FILES['gambar']['tmp_name'];   
      $target_dir = "../../images/buku/";
      $target_file = $target_dir.$nama_baru;
      $sql = mysqli_query($conn, "INSERT INTO tbl_buku VALUES ('','$judul_buku','$kategori','$penerbit','$nama_baru')") or die(mysqli_error($conn));
      if($sql){
        move_uploaded_file($sum, $target_file);
        ?>
          <script>
            alert("Data telah ditambahkan");
            window.location.href="admin.php?tampil=buku";
          </script>
       <?php
      }
    }
  }
?>
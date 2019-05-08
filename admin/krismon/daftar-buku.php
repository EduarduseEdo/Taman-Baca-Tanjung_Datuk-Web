<?php require_once 'header.php' ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Buku
        <small>Taman Baca Tanjung Datuk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="members.php">Data Buku</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="pull-left">
                <h3 class="box-title">Data Buku</h3>
              </div>
              <div class="pull-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">
                  Tambah Buku
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="member" class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul Buku</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Penerbit</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php 
                            $no=1;
                            $tampil = mysqli_query($conn, "select *from tbl_buku")
                             or die (mysqli_error());
                            while ($data=mysqli_fetch_array($tampil)) {
                            
                           ?>
                              <tr>
                                  <td><?= $no; ?></td>
                                  <td><?= $data['judul_buku']; ?></td>
                                  <td><?= $data['kategori']; ?></td>
                                  <td><?= $data['penerbit']; ?></td>
                                  <td><img src="../../images/buku/<?= $data['gambar']; ?>" height="25" width="25"></td>
                                  <td>
                                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                  </td>
                              </tr>
                              <?php 
                              $no++;
                            }
                        ?>  
                </tbody>
              </table>
            </div>
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
            <!-- /.modal -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- modal input -->
<?php require_once 'footer.php' ?>
<!-- ekseksi from tambah -->
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
          window.location.href="daftar-buku.php";
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
            window.location.href="daftar-buku.php";
          </script>
       <?php
      }
    }
  }
?>
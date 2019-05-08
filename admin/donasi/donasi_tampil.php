<?php 
	if (!defined("INDEX")) die ("---");

  include ("../lib/fungsi_tglindonesia.php");
 ?>
<div class="content-wrapper">
     <section class="content-header">
        <h1>
          DAFTAR DONASI
        </h1>

        <ol class="breadcrumb">

            <a href="?tampil=donasi_tambah" class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Donasi </a>
            <br>

        </ol>
      </section>
      <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-warning">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Data Sejarah Singkat </h3>
              <div class='clearfix'></div>
            </div> -->
            <!-- /.box-header -->
            
            <div class="box-body">
              
              
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tabel-data">
                <!-- id_table -->
                  <thead>
                    <tr class="warning">
                      <th style="text-align: center;">NO</th>
                      <th style="text-align: center;">NAMA DONATUR</th>
                      <th style="text-align: center;">JUMLAH BUKU</th>
                      <th style="text-align: center;">ALAMAT</th>
                      <th style="text-align: center;">KODE POS</th>
                      <th style="text-align: center;">STATUS PENGIRIMAN</th>
                      <th style="text-align: center;">TANGGAL</th>
                      <th style="text-align: center;">AKSI</th>
                   <!--    <th style="text-align: center; width: 5%;">HAPUS</th> -->
                    </tr>
                    </thead>

        <?php 

						$no=1;
						$tampil = mysqli_query($conn, "select *from tbl_donasi")
						 or die (mysqli_error());
						while ($data=mysqli_fetch_array($tampil)) { 
                $tanggal = tgl_indonesia($data['tanggal']);       

					 ?>

					         <tr>
                      <td style="text-align: center; width: 5%;"> <?= $no; ?> </td>
                      <td style="text-align: center; width: 15%;"> <?= $data['nama_donatur']; ?></td>
                      <td style="text-align: center; width: 7%;"> <?= $data['jmlh_buku']; ?></td>
                      <td style="text-align: center; width: 25%;"> <?= $data['alamat']; ?></td>
                      <td style="text-align: center; width: 7%;"> <?= $data['kode_pos']; ?></td>
          					 	<td style="text-align: center; width: 15%;"> <?= $data['status_pengiriman']; ?></td>
                      <td style="text-align: center; width: 10%;"> <?= $tanggal ?></td>


          					 	<td style="text-align: center;"> <a href="?tampil=donasi_edit&id=<?=
          					 			$data['id_donasi']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a>
                             <a href="?tampil=donasi_hapus&id=<?=
                          $data['id_donasi']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          					 	</td>
					        </tr>
			       
               <?php 
		 		$no++;
		 	}
		?>

            	</table>

            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      
      </div>
      <!-- /.row -->
	</div>
    
    </section>
    <!-- /.content -->

  <!-- Control Sidebar -->
  </div>
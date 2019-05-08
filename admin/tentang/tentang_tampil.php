<div class="content-wrapper">
    <!-- Content Header (Page header) -->

<!-- Content Wrapper. Contains page content --> 
  
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          TENTANG
        </h1>

       <!--  <ol class="breadcrumb">

            <a href="?tampil=gurusma_tambah" class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Tentang </a>
            <br>

          <li class="active">      	
            Tentang
          </li>
        </ol> -->
      </section>

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
                <table class="table table-bordered table-striped" id="id_table">
                  <thead>
                    <tr class="warning">
                      <th style="text-align: center;"">FOTO</th>
                      <th style="text-align: center;"">ISI</th>
                      <th style="text-align: center; width: 5%;">EDIT</th>
                   <!--    <th style="text-align: center; width: 5%;">HAPUS</th> -->
                    </tr>

        <?php 
						$no=1;
						$tampil = mysqli_query($conn, "select *from tbl_tentang")
						 or die (mysqli_error());
						while ($data=mysqli_fetch_array($tampil)) {        

					 ?>

					         <tr>
                      <th style="text-align: justify; width: 10%;"><img src="../images/tentang/<?= $data['gambar']; ?>" 
                        width="150" height="100"></th>
          					 	<th style="text-align: justify; width: 70%;"> <?= $data['sejarah']; ?></th>


          					 	<th> <a href="?tampil=tentang_edit&id=<?=
          					 			$data['id_tentang']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a>
          					 	</th>
					        </tr>
			       </thead>
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

    <!-- DataTables -->
<!--    <script src="plugins/datatables/jquery.dataTables.min.js"></script>-->
<!--    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>-->
    <!-- SlimScroll -->
<!--    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>-->
    <!-- FastClick -->
<!--    <script src="plugins/fastclick/fastclick.js"></script>-->
    <!-- AdminLTE App -->
<!--    <script src="dist/js/app.min.js"></script>-->
    <!-- AdminLTE for demo purposes -->
<!--    <script src="dist/js/demo.js"></script>-->
    <!-- page script -->

    <!-- /.content -->
  </div>
<div class="content-wrapper">
      <section class="content-header">
        <h1>
          KONTAK
        </h1>
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
                      <th style="text-align: center;">EMAIL</th>
                      <th style="text-align: center;">NOMOR HP</th>
                      <th style="text-align: center;">ALAMAT</th>
                      <th style="text-align: center; width: 5%;">EDIT</th>
                   <!--    <th style="text-align: center; width: 5%;">HAPUS</th> -->
                    </tr>

        <?php 
						// $no=1;
						$tampil = mysqli_query($conn, "select *from tbl_kontak")
						 or die (mysqli_error());
						while ($data=mysqli_fetch_array($tampil)) {        

					 ?>

					         <tr>
                      
          					 	<th style="text-align: justify; width: 25%;"> <?= $data['email']; ?></th>
                      <th style="text-align: justify; width: 25%;"> <?= $data['no_hp']; ?></th>
                      <th style="text-align: justify; width: 40%;"> <?= $data['alamat']; ?></th>


          					 	<th> <a href="?tampil=kontak_edit&id=<?=
          					 			$data['id_kontak']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a>
          					 	</th>
					        </tr>
			       </thead>
               <?php 
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
</div>
  <!-- Control Sidebar -->

    <!-- DataTables -->
<!--
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
-->
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
  
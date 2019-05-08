<?php 
  include "header.php";
 ?>
  <?php 
    include "menu.php";
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

<!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          DATA GALERI 
        </h1>

        <ol class="breadcrumb">
          <li>
            
          </li>
          <li class="active">
            Data Galeri
          </li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Galeri A-Z </h3>
              <span class='pull-right'>
                
              </span>
              <div class='clearfix'></div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              
              
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="id_table">
                  <thead>
                    <tr class="warning">
                      <th style="text-align: center; width: 5%;">NO.</th>
                      <th>NAMA</th>
                      <th>USERNAME</th>
                      <th style="text-align: center; width: 5%;">EDIT</th>
                      <th style="text-align: center; width: 5%;">HAPUS</th>
                    </tr>
                  </thead>
                </table>
              </div>



            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      
      </div>
      <!-- /.row -->
    
    </section>
    <!-- /.content -->

  <!-- Control Sidebar -->

    <!-- DataTables -->
    <script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('plugins/fastclick/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('dist/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('dist/js/demo.js') ?>"></script>
    <!-- page script -->

    <!-- /.content -->
  </div>
  
 <?php 
    include"footer.php";
  ?>
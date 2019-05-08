<?php $this->load->view('header');; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA USER 
      </h1>

      <ol class="breadcrumb">
        <li>
          <?php echo anchor('Dashboard', '<i class="fa fa-dashboard"></i> Home'); ?>
        </li>
        <li>
          <?php echo anchor('User', '<i class="fa fa-link"></i> Data User'); ?>
        </li>
        <li class="active">
          Edit Data User
        </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data USer </h3>
              <span class='pull-right'>
                <?php echo anchor('User', '<i class="fa fa-angle-double-left"></i> Kembali', array('class'=>'btn btn-warning btn-sm')); ?>
              </span>
              <div class='clearfix'></div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">

              <?php 
                echo form_open('User/update');
              ?>

              <?php 
                echo form_hidden('id_user', $data_user->id_user);
               ?>
    
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama_user" value="<?php echo $data_user->nama_user; ?>" class="form-control" id="" placeholder="Nama" required="" autofocus="">
                    </div>
                  </div>
                  
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" name="username" value="<?php echo $data_user->username; ?>" class="form-control" id="" placeholder="Username" required="">
                    </div>
                  </div>

                  <div class="clearfix"></div>

                  
                </div>
                  
                
                <button type="submit" class="btn btn-warning pull-right">Simpan</button>

                <?php 
                  echo anchor('User', 'Batal', array('class'=>'btn btn-default pull-right', 'style'=>'margin-right:5px;'));
                ?>

              <?php 
                echo form_close();
              ?>

              
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
  </div>




<?php
  $this->load->view('footer');;
  ?>

  <!-- Control Sidebar -->
 
</div>
<!-- ./wrapper -->


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

<script>   
 $("#id_table").DataTable({
      iDisplayLength: 50,
              responsive: true,
      "info": true,
      "ordering": true,
      columnDefs: [
         { orderable: false, targets: -2 },
         { orderable: false, targets: -1 }
      ]
  });

  $(document).on("click", "#hapus", function(e) {
    var link = $(this).attr("href");
    e.preventDefault();
    bootbox.confirm("Anda yakin ingin menghapus data ini ?", function(result) {
      if (result) {
        document.location.href = link;
      }
    });
  });
</script>

</body>
</html>

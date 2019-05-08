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
        <li class="active">
          Data User
        </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data User A-Z </h3>
              <span class='pull-right'>
                <?php echo anchor('User/tambah', '<i class="glyphicon glyphicon-plus"></i> Tambah Data', array('class'=>'btn btn-warning btn-sm')); ?>
              </span>
              <div class='clearfix'></div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <?php 
                $pesan = $this->session->flashdata('pesan');
                if (isset($pesan)) {
                  echo $pesan;
                }
              ?>
              
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
                  <tbody>
                    <?php 
                    $no = 1;
                    if ($data_user->num_rows() > 0) { 
                      foreach ($data_user->result() as $data) { ?>
                        <tr>
                          <td style="text-align: center;"><?php echo $no++; ?></td>
                          <td><?php echo $data->nama_user; ?></td>
                          <td><?php echo $data->username; ?></td>
                          <td style="text-align: center;">
                            <?php echo anchor('User/edit/'.$data->id_user, '<i class="glyphicon glyphicon-edit"></i>'); ?>
                          </td>
                          <td style="text-align: center;">
                            <?php echo anchor('User/hapus/'.$data->id_user, '<i class="glyphicon glyphicon-trash"></i>', array('id'=>'hapus')); ?>
                          </td>
                        </tr>
                    <?php    
                      }
                    }else{?>
                      <tr>
                        <td style="text-align: center; font-weight: bold;" colspan="100">Data Tidak Ada . . .</td>
                      </tr>
                    <?php
                    }
                     ?>
                  </tbody>
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

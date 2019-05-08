<?php 
  include "header.php";
 ?>
  <?php 
    include "menu.php";
  ?>

<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

<!-- Fungsi  -->
  
      <section class="content-header">
        <h1>
          DATA PROFIL 
        </h1>

        <ol class="breadcrumb">
          <li class="active">
            Data Profil
          </li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Profil A-Z </h3>
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
  </div>

   <?php 
      include"footer.php";
    ?>
</body>
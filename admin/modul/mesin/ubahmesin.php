			<div class="page-inner">
                <div class="page-title">
                    <h3>MESIN</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Mesin</a></li>
                            <li class="active">Daftar Mesin</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
								<div class="panel-heading">
									<strong>Tambah Data Mesin</strong>
								</div>
								<div class="panel-body"style='padding-top:20px'>
											<form role="form" method='POST' action='<?php echo base_url("mesin/update"); ?>' enctype='multipart/form-data'>
												<?php
												$csrf = array(
														'name' => $this->security->get_csrf_token_name(),
														'hash' => $this->security->get_csrf_hash()
												);
												?>
												<input type="hidden" name="<?php echo $csrf['name'];?>" value="<?php echo $csrf['hash'];?>" />	
												<?php $notif = $this->session->flashdata('notif'); ?>
												<?php if($notif=='success') {?>
													<div class="alert alert-success alert-dismissable">
																<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
																<strong>Sukses!</strong> Data Mesin Berhasil Diperbaharui
													</div>
												<?php 
												}
												elseif($notif=='error') {
												?>
													<div class="alert alert-danger alert-dismissable">
																<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
																<strong>Gagal!</strong> Data Mesin Gagal Diperbaharui
													</div>
												<?php } ?>
												<div class="row">
												<div class="col-sm-6">
												<div class="form-group">
													<label>Kode Mesin</label>
													<input class="form-control" name='kode_mesin' value='<?php echo $rsp['kode_mesin'] ?>' autofocus>
												</div>
												</div>
												<div class="col-sm-6">
												<div class="form-group">
													<label>Nama Mesin</label>
													<input class="form-control" name='nama_mesin' value='<?php echo $rsp['nama_mesin'] ?>' >
												</div>
												</div>
												</div>
												<input type='hidden' name='idb' value='<?php echo $rsp['id_mesin'] ?>'>
												<button type="submit" class="btn btn-info mr15">Simpan</button>
												<button type="reset" class="btn btn-default" onclick="history.go(-1)">Batal</button>
											</form>
								</div>
								<!-- /.panel-body -->
							</div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2018 &copy; Higen+.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="<?php echo base_url(); ?>assets/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/js/modern.min.js"></script>
        <script>
			$(document).ready(function(){
				$('#datepicker').datepicker({
					autoclose: true,
					format: 'dd/mm/yyyy'
				});
			});
		</script>
    </body>
</html>
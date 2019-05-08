<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 Taman Baca Tanjung Datuk.</strong> All rights
    reserved.
  </footer>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/jquery.min.js"></script>
                <script src="js/jquery.offline.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="datatable/tabel/js/jquery.dataTables.min.js"></script>


                <!-- Include all compiled plugins (below), or include individual files as needed --> 
                <script src="js/bootstrap.js"></script>
                <script>
                    $(document).ready(function(){
                        $('#tabel-data').DataTable();
                    });
                </script>


                <script type="text/javascript">
                  $(function(){
                      $('.to_top').hide().on('click', function(){
                          $('body,html').animate({scrollTop : 0}, 800);
                      });
                      $(window).on('scroll', function(){
                          if($(this).scrollTop() > 50){
                              $('.to_top').show();
                          }else{
                              $('.to_top').hide();
                          }
                      });
                  });
                </script>

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<!--   <script src="js/jquery.offline.js"></script> -->
  <script src="bootstrap/js/bootstrap.min.js"></script> 
    <script src="dist/js/adminlte.min.js"></script>
  <script src="datatable/tabel/js/jquery.dataTables.min.js"></script>
  <script src="datatable/tabel/js/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
        $('table').DataTable();
    })
</script>
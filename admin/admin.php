<?php
	session_start();

	if(!empty($_SESSION['username']) and 
	!empty($_SESSION['password'])) {

	include("lib/koneksi.php");
	define("INDEX",true);
?>
    		
    		<?php 
    			include"header.php";
 			 ?>
			<body class="hold-transition skin-blue sidebar-mini">
			<div class="wrapper">
 			<?php 
    			include"menu.php";
 			 ?>

 			<?php 
    			include"konten.php";
 			 ?>

 			<?php 
    			include"footer.php";
 			 ?>
			</div>
			</body>
			</html>

<?php 
	} else{
		echo "Dilarang membuka Halaman Ini !!!";
		echo "<meta http-equiv='refresh' content='1;
			url=index.php'>";
			
	}
 ?>
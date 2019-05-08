<!DOCTYPE html>
<html>
<head>
	<title> Login Administrator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="dataTables/datatables.min.css" rel="stylesheet">

</head>
<body>
	<br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form style="background-color: white;" method="POST" action="ceklogin.php">
					<div class="panel-heading">
                        <h2 align ="center">Taman Bacaan Tanjung Datuk Paloh</h2>
                    </div>
					
					<br>
						<input type="text" name="username" class="form-control"
							placeholder="Username" required autofocus>
							<br>
						<input type="password" name="password" class="form-control"
							placeholder="Password" required>
							<br>
							<button class="btn btn-lg btn-primary btn-block"
							type="submit"> Login </button>
							<br>
							<div align="center"> 
									<div id="copyright">
										<p>Copyright © 2019 - <a href="../" target="blank">Taman Baca Tanjung Datuk.</a> </p>
										<p>All rights reserved.</p>
									<!-- 	<p>Designed by <a href="#"> IBM </a></p> -->
									</div>
							</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
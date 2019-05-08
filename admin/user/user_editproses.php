<div class="content-wrapper">
	<?php 
		if ($_POST['password'] == "") {
			$edit = mysqli_query($conn, "update tbl_admin set 
					username 	= '$_POST[username]' 
				") or die (mysqli_error($conn));
			if ($edit) echo "Profil berhasil diedit";
		} else {
			if ($_POST['password'] != $_POST['password_ulang']){
				echo "<p style='color:red'> Password yang anda masukkan tidak sama !!! </p>";
			} else {
				$password = md5 ($_POST['password']);
				$edit = mysqli_query($conn, "update tbl_admin set 
					username 	= '$_POST[username]',
					password 	= '$password'
				") or die (mysqli_error($conn));

				if ($edit) echo "Profil berhasil diedit";
			}
		}
		echo "Data Berhasil diedit..!!";
		echo "<meta http-equiv='refresh'
				content = '1; url=?tampil=user_edit'>";
	 ?>
</div>
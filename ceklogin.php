<?php
	session_start();
	require 'config/koneksi.php';

	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	
	if (empty($username) || empty($password)) {
		echo "<script>
                    alert('Data Kosong');
                    window.location.href = 'login.php';
        </script>";
	}
	else
	{
		$sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
		$jumlah = mysqli_num_rows($sql);

		if ($jumlah == 0) {
			echo "<script>
	                    alert('Username Salah');
	                    window.location.href = 'login.php';
	        </script>";
		}
		else
		{
			$row = mysqli_fetch_array($sql);
			// password_verify($password, $row['password'])
			if ($password == $row['password'])
			{
				$_SESSION['ptr_user'] = $row['username'];
				$_SESSION['ptr_level'] = $row['level'];
				echo "<script>
	                    alert('Login Berhasil');
	                    window.location.href = 'index.php';
	        	</script>";
			}
			else
			{
				# password salah
				echo "<script>
	                    alert('Password Salah');
	                    window.location.href = 'login.php';
	        	</script>";
			}
		}
	}
?>
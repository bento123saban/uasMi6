<?php
    session_start();

    if (empty($_SESSION['ptr_user'])) {
        echo "<script>
                    alert('Silahkan Login Dulu');
                    window.location.href = 'login.php';
        </script>";
    }
    else {

        require_once 'config/koneksi.php';
		require_once 'config/koneksi.php';

        $user = @$_SESSION['ptr_user'];
        $level = @$_SESSION['ptr_level'];
        $page = @$_GET['page'];
?>
<!DOCTYPE html>
<html lang="in">
<head>
	<title>Putri Angkasa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no"/>
	<script src="https://kit.fontawesome.com/b9a9bf6e53.js" crossorigin="anonymous"></script>
</head>

<body onscroll="">
<!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus corrupti debitis mollitia unde minus dignissimos! Voluptatem praesentium molestias porro! Dolore veniam consequatur cupiditate cum officia! -->
	<!-- -------------- Menu ------------- -->
	<section id="MENU" class="_menu allMenu" data-direction="vertical" data-attach="fixed">
		<div class="menu-box">
			<?php
			if ($level == 'admin') {
				include 'content/admin.php';
			} else if ($level == 'user'){
				include 'content/user.php';
			}
			?>
		</div>
	</section>

	<script src="js/index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
<?php
    // require_once '../config/koneksi.php';
    // require_once '../config/function.php';

    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $harga = filter_var($_POST['harga'], FILTER_SANITIZE_STRING);
    $deskripsi = filter_var($_POST['deskripsi'], FILTER_SANITIZE_STRING);

    $gbr_name = $_FILES['gambar']['name'];
    $gbr_size = $_FILES['gambar']['size'];
    $gbr_tmp = $_FILES['gambar']['tmp_name'];
    $gbr_type = $_FILES['gambar']['type'];

    $gbr_ext = getTipeFile($gbr_name);
    $dir = 'image/menu/';

    if (empty($nama) || empty($harga) || empty($deskripsi)) {
        echo "<script>
                    alert('Data Kosong');
                    window.location.href = 'index.php?page=tambah-menu';
        </script>";
    } else if ($gbr_size > 2097154) {
        echo "<script>
                alert('File tidak boleh lebih dari 2MB');
                window.location.href = 'index.php?page=tambah-menu';
        </script>"; 
    } else if ($gbr_ext != "jpeg" && $gbr_ext != "jpg" && $gbr_ext != "png") {
        echo "<script>
                alert('Format file salah, pilih JPEG, JPG atau PNG');
                window.location.href = 'index.php?page=tambah-menu';
        </script>";
    } 
    else{
        $simpan = mysqli_query($con, "INSERT INTO `menu`(`ID`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES ('','$nama','$harga','$deskripsi', '$gbr_name')");
        var_dump($simpan);
        
        if ($simpan) {
            move_uploaded_file($gbr_tmp, $dir.$gbr_name); 
            echo "<script>
                    alert('Data Telah Ditambah');
                    window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesalahan');
                    window.location.href = 'index.php?page=tambah-menu';
            </script>";
        }
    }

?>
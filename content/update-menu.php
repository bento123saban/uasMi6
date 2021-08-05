<?php
    require_once '../config/koneksi.php';
    require_once '../config/function.php';
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
        $harga = filter_var($_POST['harga'], FILTER_SANITIZE_STRING);
        $deskripsi = filter_var($_POST['deskripsi'], FILTER_SANITIZE_STRING);

        if (empty($nama) || empty($harga) || empty($deskripsi)) {
            echo "<script>
                    alert('Data Kosong');
                    window.location.href = 'index.php?page=ubah-menu&id=$id';
            </script>";
        } else if ($_FILES['gambar']['name'] != '') {
            $gambar_name = $_FILES['gambar']['name'];
            $gambar_size = $_FILES['gambar']['size'];
            $gambar_type = $_FILES['gambar']['type'];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];

            // $gambar_ext = strtolower(end(explode('.',$gambar_name)));
            $gambar_ext = getTipeFile($gambar_name);
            var_dump($gambar_ext);
            $dir = '../image/menu/';

            if ($gambar_size > 2097154) {
                echo "<script>
                        alert('File tidak boleh lebih dari 2MB');
                        // window.location.href = '../index.php?page=ubah-menu&id=$id';
                </script>";
            } else if ($gambar_ext != "jpeg" && $gambar_ext != "jpg" && $gambar_ext != "png") {
                echo "<script>
                        alert('Format file salah, pilih JPEG, JPG atau PNG');
                        // window.location.href = '../index.php?page=ubah-menu&id=$id';
                </script>";
            } else {
                $simpan = mysqli_query($con, "UPDATE `menu` SET `nama` = '$nama', `harga` = '$harga', `deskripsi` = '$deskripsi', `gambar` = '$gambar_name' WHERE `menu`.`ID` = $id");

                if ($simpan) {
                    move_uploaded_file($gambar_tmp, $dir.$gambar_name);
                    echo "<script>
                            alert('Data Telah Diubah');
                            // window.location.href = '..//index.php';
                    </script>";
                }else{
                    echo "<script>
                            alert('Terjadi Kesalahan 01');
                            // window.location.href = '../index.php?page=ubah-menu&id=$id';
                    </script>";
                }
            }
        } else {
            require_once '../config/koneksi.php';
            $update = mysqli_query($con, "UPDATE `menu` SET `nama` = '$nama', `harga` = '$harga', `deskripsi` = '$deskripsi' WHERE `menu`.`ID` = $id");

            if ($update) {
                echo "<script>
                        alert('Data Telah Diubah');
                        window.location.href = '../index.php?page=list-menu';
                </script>";
            }else{
                echo "<script>
                        alert('Terjadi Kesalahan');
                        console.log('line');
                        window.location.href = '../index.php?page=ubah-menu&id=$id';
                </script>";
            }
        }
    }
?>
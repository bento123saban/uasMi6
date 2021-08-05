<?php
    require_once '../config/koneksi.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hapus = mysqli_query($con, "DELETE FROM `menu` WHERE menu.id = $id");
        if ($hapus) {
            echo "
                <script>
                    alert('Data telah dihapus');
                    window.location.href = '../index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi kesalahan');
                    window.location.href = '../index.php';
                </script>
            ";
        }
    }
?>

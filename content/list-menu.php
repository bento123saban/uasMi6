<table class="table">
    <thead>
        <tr>
            <!-- <th scope="col">ID Menu</th> -->
            <th scope="col">Nama Menu</th>
            <th scope="col">Harga per Menu</th>
            <th scope="col">Deskripsi Menu</th>
            <th scope="col">Gambar Menu</th>
            <th scope="col">Setting</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = mysqli_query($con, "SELECT * FROM menu");
            while ($hasil = mysqli_fetch_array($sql)) {
                echo "
                    <tr>
                        <!-- <td scope='row'>$hasil[ID]</td> -->
                        <td class='nama-menu'>$hasil[nama]</td>
                        <td>Rp. $hasil[harga],-</td>
                        <td class='deskripsi'><p>$hasil[deskripsi]</p></td>
                        <td><img src='image/menu/$hasil[gambar]'></td>
                        <td>
                            <a class='btn btn-danger' href='content/hapus-menu.php?id=$hasil[ID]' onclick='return confirm(\"Hapus Menu ?\")'><i class='fas fa-trash'></i> Hapus</a>
                            <a class='btn btn-primary' href='index.php?page=ubah-menu&id=$hasil[ID]'><i class='fas fa-trash'></i> Ubah</a>
                        </td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>
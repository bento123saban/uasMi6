<a class="btn btn-secondary" href="logout.php">Keluar</a>

<div class="menu-headings">
    <h2>MENU</h2>
    <p class="menu-heading-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, rerum harum reiciendis recusandae exercitationem libero eveniet veritatis quod nemo? Consequuntur accusantium dolorem minus nihil quas.</p>
</div>
    
<div class="menu-content">
    <div class="menu-list-content" id="menu-list-content">
        <?php
            $sql = mysqli_query($con, "SELECT * FROM menu");
            while ($hasil = mysqli_fetch_array($sql)) {
                echo "
                <!-- card box -->
                <div class='card' data-nama='$hasil[nama]'>
                    <div class='card-konten'>
                        <span class='tambah' data-id='$hasil[ID]'>+</span>
                            <img src='image/menu/$hasil[gambar]'>
                            <p class='card-deskripsi'>$hasil[deskripsi]</p>
                            <p class='card-harga'>Rp. $hasil[harga],-</p>
                    </div> <!-- card image -->
                    <p class='menu-nama'>$hasil[nama]</p>
                </div> <!-- card box -->
                ";
            }
        ?>
    </div>				
</div>
<?php
    $id = @$_GET['id'];
    $ubah = mysqli_query($con, "SELECT * FROM menu where ID = '$id'");
    $hasil = mysqli_fetch_array($ubah)
?>

<form action="content/update-menu.php?id=<?= $hasil['ID'] ?>" method="POST" enctype="multipart/form-data" id="menu-simpan">
    <div class="form-group">
        <label for="nama">Nama Menu</label>
        <input type="text" name="nama" class="form-control" value="<?= $hasil['nama']?>" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga Menu</label>
        <input type="number" name="harga" class="form-control" value="<?= $hasil['harga']?>" required>
    </div>
    <div class="form-group">
        <label for="almat">Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control" rows="3" required><?= $hasil['deskripsi']?></textarea>
    </div>
    <div class="form-group">
        <img src="image/menu/<?= $hasil['gambar']?>" alt="">
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</form>

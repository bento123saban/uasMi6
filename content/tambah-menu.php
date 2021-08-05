
<form action="index.php?page=menu-simpan" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nama">Nama Menu</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga Menu</label>
        <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="almat">Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</form>

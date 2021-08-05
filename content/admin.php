
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=list-menu"><i class="fas fa-list"></i> Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=tambah-menu"><i class="fas fa-plus"></i> Tambah Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-pluss"></i> Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
    if ($page == 'list-menu' || $page == 'list-order' || $page == '') { ?>
        <div class="search-box">
            <input type="text" id="search" onkeyup="search(this)" placeholder="Cari menurut nama menu..">
            <i class="fas fa-search"></i>
        </div>
<?php } ?>
<div class="table-box" id="tabel-menu">
    <?php
        if ($page != "") {
            include "$page.php";
        } else {
            include "list-menu.php";
        }
    ?>
</div>


<?php
    function getTipeFile($namafile)
    {
        $step1 = strtolower($namafile);    //gambar.png
        $step2 = explode(".", $step1);      //["gambar","png"]
        $tipe = end($step2); //png

        return $tipe;
    }

?>

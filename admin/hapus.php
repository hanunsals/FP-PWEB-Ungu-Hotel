<?php
    include 'db.php';

    $id_gambar=$_GET["id_gambar"];
    $gambar=$_GET["gambar"];
    $sql="delete from gambar where id_gambar=$id_gambar";
    $hapus_bank=mysqli_query($con,$sql);

    //Menghapus file gambar
    unlink("gambar/".$gambar);

    if ($hapus_bank) {
        header("Location:galery.php?hapus=berhasil");
    }
    else {
        header("Location:galery.php?hapus=gagal");

    }
?>
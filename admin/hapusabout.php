<?php
    include 'db.php';

    $id_about=$_GET["id_about"];
    $gabout=$_GET["gabout"];
    $sql="delete from gabout where id_about=$id_about";
    $hapus_bank=mysqli_query($con,$sql);

    //Menghapus file gambar
    unlink("gabout/".$gabout);

    if ($hapus_bank) {
        header("Location:adminabout.php?hapus=berhasil");
    }
    else {
        header("Location:adminabout.php?hapus=gagal");

    }
?>
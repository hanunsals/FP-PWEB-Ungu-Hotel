<?php

    if (isset($_POST['smpn'])) {
        //Include file koneksi, untuk koneksikan ke database
        include 'db.php';
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan	= array('png','jpg');
            $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar']['tmp_name'];

            if (!empty($gambar)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload gambar
                    move_uploaded_file($file_tmp, '../admin/gambar/'.$gambar);

                    $sql="insert into gambar (gambar) values ('$gambar')";

                    $simpan_bank=mysqli_query($con,$sql);

                    if ($simpan_bank) {
                        header("Location:galery.php?add=berhasil");
                    }
                    else {
                        header("Location:galery.php?add=gagal");
                    }
                    
                }
            }else {
                $gambar="bank_default.png";
            }
        }

    }
?>
<?php

    if (isset($_POST['smpn'])) {
        //Include file koneksi, untuk koneksikan ke database
        include 'db.php';
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan	= array('png','jpg');
            $gabout = $_FILES['gabout']['name'];
            $x = explode('.', $gabout);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gabout']['tmp_name'];

            if (!empty($gabout)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload gabout
                    move_uploaded_file($file_tmp, '../admin/gabout/'.$gabout);

                    $sql="insert into gabout (gabout) values ('$gabout')";

                    $simpan_bank=mysqli_query($con,$sql);

                    if ($simpan_bank) {
                        header("Location:adminabout.php?add=berhasil");
                    }
                    else {
                        header("Location:adminabout.php?add=gagal");
                    }
                    
                }
            }else {
                $gabout="bank_default.png";
            }
        }

    }
?>
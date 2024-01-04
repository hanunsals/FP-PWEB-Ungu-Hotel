<?php
include('db.php');

if (isset($_GET['pid'])) {
    $id = $_GET['pid'];

    // Persiapkan dan eksekusi prepared statement untuk menghapus data berdasarkan ID
    $stmt = $con->prepare("DELETE FROM `payment` WHERE id = ?");
    
    // Periksa apakah prepared statement berhasil dibuat
    if ($stmt === false) {
        die('Error in preparing DELETE statement: ' . $con->error);
    }

    // Ikat parameter
    $stmt->bind_param("i", $id);

    // Eksekusi prepared statement
    $result = $stmt->execute();

    // Periksa hasil eksekusi
    if ($result === false) {
        die('Error in executing DELETE statement: ' . $stmt->error);
    }

    // Tutup prepared statement
    $stmt->close();

    // Redirect ke halaman payment.php setelah menghapus data
    header("Location: payment.php");
    exit();
} else {
    // Jika parameter pid tidak diberikan, tampilkan pesan error
    die('Error: Parameter pid is missing.');
}
?>

<?php
include 'koneksi.php'; // Menggunakan koneksi.php yang telah dibuat sebelumnya

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menyiapkan query untuk menghapus data
    $query = "DELETE FROM presensi WHERE id = $id"; // Menggunakan variabel $id langsung dalam query

    // Menjalankan query
    if (mysqli_query($conn, $query)) {
        header("Location: index.php?page=presensi");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
<?php
include 'koneksi.php'; // Menggunakan koneksi.php yang telah dibuat sebelumnya

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menyiapkan dan menjalankan query untuk mengambil data presensi
    $query = "SELECT * FROM presensi WHERE id = $id"; // Menggunakan $id langsung
    $result = mysqli_query($conn, $query);
    $presensi = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_siswa = $_POST['nama_siswa'];
        $tanggal = $_POST['tanggal'];
        $status = $_POST['status'];

        // Menyiapkan dan menjalankan query untuk memperbarui data
        $query = "UPDATE presensi SET nama_siswa = '$nama_siswa', tanggal = '$tanggal', status = '$status' WHERE id = $id";
        
        if (mysqli_query($conn, $query)) {
            header("Location: index.php?page=presensi");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// Menutup koneksi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Presensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Presensi</h1>
        <form method="POST">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa" value="<?= htmlspecialchars($presensi['nama_siswa']); ?>" required>

            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="<?= htmlspecialchars($presensi['tanggal']); ?>" required>

            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="Hadir" <?= $presensi['status'] == 'Hadir' ? 'selected' : ''; ?>>Hadir</option>
                <option value="Tidak Hadir" <?= $presensi['status'] == 'Tidak Hadir' ? 'selected' : ''; ?>>Tidak Hadir</option>
                <option value="Sakit" <?= $presensi['status'] == 'Sakit' ? 'selected' : ''; ?>>Sakit</option>
                <option value="Izin" <?= $presensi['status'] == 'Izin' ? 'selected' : ''; ?>>Izin</option>
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="datapresensi.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
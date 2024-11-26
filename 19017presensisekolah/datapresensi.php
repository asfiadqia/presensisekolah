<?php
include 'koneksi.php'; // Menggunakan koneksi.php yang telah dibuat sebelumnya

// Menyiapkan dan menjalankan query untuk mengambil semua data presensi
$query = "SELECT * FROM presensi";
$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil
if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}

// Mengambil semua data presensi
$presensi = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Menutup koneksi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Presensi Siswa</h1>
        <a href="add_presensi.php" class="btn btn-primary">Tambah Presensi</a>
        <table>
            <thead>
                <tr>
                 
                    <th>Nama Siswa</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($presensi as $row): ?>
                <tr>
                    
                    <td><?= htmlspecialchars($row['nama_siswa']); ?></td>
                    <td><?= htmlspecialchars($row['tanggal']); ?></td>
                    <td><?= htmlspecialchars($row['status']); ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
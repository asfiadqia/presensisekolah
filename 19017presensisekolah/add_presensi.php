<?php
include 'koneksi.php'; // Menggunakan koneksi.php yang telah dibuat sebelumnya

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    // Menyiapkan dan menjalankan query untuk memasukkan data
    $query = "INSERT INTO presensi (nama_siswa, tanggal, status) VALUES ('$nama_siswa', '$tanggal', '$status')";
    
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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Presensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: #f0f4f8;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    background: #ffffff;
    max-width: 500px;
    width: 100%;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

.container:hover {
    transform: scale(1.02);
}

h1 {
    font-size: 26px;
    color: #444;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin: 10px 0 5px;
    font-weight: 600;
    color: #555;
    font-size: 14px;
}

input[type="text"],
input[type="date"],
select {
    padding: 12px;
    font-size: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    outline: none;
    background-color: #fafafa;
    color: #333;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="date"]:focus,
select:focus {
    border-color: #007bff;
    background-color: #f0f8ff;
}

button {
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    color: #ffffff;
    background-color: #007bff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.btn-secondary {
    display: inline-block;
    padding: 10px;
    font-size: 14px;
    color: #007bff;
    background-color: transparent;
    text-decoration: none;
    border: 1px solid #007bff;
    border-radius: 8px;
    margin-top: 10px;
    transition: all 0.3s ease;
}

.btn-secondary:hover {
    background-color: #007bff;
    color: #ffffff;
}
</style>

<body>
    <div class="container">
        <h1>Tambah Presensi</h1>
        <form method="POST">
            <label for="nama_siswa">Nama Siswa</label>
            <select name="nama_siswa" id="nama_siswa" required>
                <option value="Alviana Maysaroh">Alviana Maysaroh</option>
                <option value="Angel Christina Grace">Angel Christina Grace</option>
                <option value="Ari Bima Prasetya">Ari Bima Prasetya</option>
                <option value="Arkan Maulidhana Nurfalah">Arkan Maulidhana Nurfalah</option>
                <option value="Asfi Zainatul Adqia">Asfi Zainatul Adqia</option>
                <option value="Azril Fathan Fadlilah">Azril Fathan Fadlilah</option>
                <option value="Bagus Wisma Saputra">Bagus Wisma Saputra</option>
                <option value="Candra Saputra">Candra Saputra</option>
                <option value="Dika Setia Kurniawan">Dika Setia Kurniawan</option>
                <option value="Fahrezi Apta Raffeliansyah">Fahrezi Apta RAffeliansyah</option>
                <option value="Fardila Faradiba">Fardila Faradiba</option>
                <option value="Farkhansyah Ibrahimovic">Farkhansyah Ibrahimovic</option>
                <option value="Hacky Zalman Alfista">Hacky Zalman Alfista</option>
                <option value="Hiru Toty Riawan">Hiru Toty Riawan</option>
                <option value="Inez Raisya Larasati">Inez Raisya Larasati</option>
                <option value="Ismey Mukarromah">Ismey Mukarromah</option>
                <option value="Lusiana">Lusiana</option>
                <option value="Maudy Ari Khofifah">Maudy Ari Khofifah</option>
                <option value="Mochammad Alvian Putra Pratama">Mochammad Alvian Putra Pratama</option>
                <option value="Muhamad Rafli Fahreza">Muhamad Rafli Fahreza</option>
                <option value="Muhammad Haafizh Haryatama">Muhammad Haafizh Haryatama</option>
                <option value="Muhammad Nur Syafi'i">Muhammad Nur Syafi'i</option>
                <option value="Naviz Fasha Pratama">Naviz Fasha Pratama</option>
                <option value="Rafli Subhi">Rafli Subhi</option>
                <option value="Rahma Qurrota 'Ainin">Rahma Qurrota 'Ainin</option>
                <option value="Rasya Adam Saputra">Rasya Adam Saputra</option>
                <option value="Satrio Aji Kurniawan">Satrio Aji Kurniawan</option>
                <option value="Satrio Gemintang Mahameru">Satrio Gemintang Mahameru</option>
                <option value="Septia Windi Astuti">Septia Windi Astuti</option>
                <option value="Tri Riska Indah Sari">Tri Riska Indah Sari</option>
                <option value="Widiatri Nur Zahra">Widiatri Nur Zahra</option>
                <option value="Wiwin Purwanti">Wiwin Purwanti</option>
                <option value="Yafi Alifia Zahida">Yafi Alifia Zahida</option>
                <option value="Yola Yulia Efendi">Yola Yulia Efendi</option>
                <option value="Zulin Nafisah Zam-Zami">Zulin Nafisah Zam-Zami</option>
            </select>

            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" required>

            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="Sakit">Sakit</option>
                <option value="Izin">Izin</option>
            </select>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>

</html>
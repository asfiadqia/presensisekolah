<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
/* General Styling */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f7f7f7;
  color: #333;
}

a {
  text-decoration: none;
  color: inherit;
  transition: 0.3s ease;
}

a:hover {
  color: #3498db;
}

/* Header */
header {
  background-color: #3498db;
  padding: 20px;
  text-align: center;
  color: white;
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 2px;
  box-shadow: 0 2px 15px rgba(202, 152, 152, 0.1);
}

/* Sidebar / Navbar */
#sidebar {
  width: 250px;
  background-color: #333;
  color: white;
  position: fixed;
  height: 100%;
  padding-top: 30px;
  left: 0;
  top: 0;
  border-right: 1px solid #444;
}

#sidebar ul {
  list-style-type: none;
}

#sidebar ul li {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #444;
}

#sidebar ul li a {
  font-size: 16px;
  display: block;
  transition: 0.3s ease;
}

#sidebar ul li a:hover {
  background-color: #000000;
  color: #fff;
  padding-left: 20px;
  border-left: 5px solid #3498db;
}

/* Content */
#content {
  margin-left: 260px;
  padding: 40px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 15px rgba(202, 152, 152, 0.1);
  min-height: 80vh;
}

h2 {
  color: #5D8AA8;
  font-size: 28px;
  margin-bottom: 20px;
  font-weight: bold;
}

p {
  font-size: 16px;
  line-height: 1.6;
  color: #666;
}

/* Footer */
footer {
  background-color: #3498db;
  color: white;
  text-align: center;
  padding: 15px;
  position: fixed;
  width: 100%;
  bottom: 0;
  left: 0;
  border-top: 1px solid #444;
}

/* Additional Styles */


.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #3498db;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s ease;
}

.btn:hover {
  background-color: #2980b9;
}

.label {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
  display: block;
}

.input-field {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  font-size: 16px;
  margin-bottom: 20px;
}

.input-field:focus {
  border-color: #3498db;
  box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
}
</style>
<body>

    <!-- Header -->
    <header>
    </header>

    <!-- Sidebar / Navbar -->
    <div id="sidebar">
    <nav class="sidebar">
      <h2>SMK N 1 Bawang</h2>
        <ul>
            <li><a href="?page=beranda">Beranda</a></li>
            <li><a href="?page=presensi">Data Presensi</a></li>
        </ul>
    </div>
    

    <!-- Content -->
    <div id="content">
       
        <?php
        // Routing sederhana berdasarkan parameter 'page'
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            

            // Menentukan halaman yang akan dimuat berdasarkan 'page'
            switch ($page) {
                case 'presensi':
                    include('datapresensi.php'); // Menampilkan data barang
                    break;
                    }
                    switch ($page) {
                        case 'beranda':
                            include('beranda.php'); // Menampilkan data barang
                            break;
                            }
                  
            }
             
        ?>
    </div>
        
    </div>

    

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Profile.Asfi Zainatul Adqia</p>
    </footer>

</body>
</html>
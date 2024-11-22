<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Halaman Admin</title>
</head>
<body>  
    <h2>Data Record</h2>
    <div class="tabel-section">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Menu</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "web_uas";
        
                // Membuat koneksi
                $koneksi = new mysqli($servername, $username, $password, $database);
        
                // Periksa koneksi
                if ($koneksi->connect_error) {
                    die("Connection failed: " . $koneksi->connect_error);
                }
        
                $no = 1;
                $ambildata = mysqli_query($koneksi, "SELECT * FROM pesan");
                while ($tampil = mysqli_fetch_array($ambildata)){
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[nama]</td>
                        <td>$tampil[email]</td>
                        <td>$tampil[no_hp]</td>
                        <td>$tampil[menu]</td>
                        <td>$tampil[pesan]</td>
                        <td>$tampil[tanggal]</td>
                        <td>
                            <a href='hapus.php?nama=$tampil[nama]'>
                                <i data-feather='trash'></i>
                            </a>
                            <a href='ubah.php?nama=$tampil[nama]'>
                                <i data-feather='edit'></i>
                            </a>
                        </td>
                    </tr>";
        
                    $no++;
                }
        
                // Tutup koneksi
                mysqli_close($koneksi);
            ?>
        </table>
    </div>
    
    <nav>
        <a href="index.php">Back</a>
    </nav>

    <script>
      feather.replace();
    </script>

</body>
</html>

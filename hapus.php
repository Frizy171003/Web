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

// Periksa apakah parameter id telah diterima dari URL
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];

    // Query untuk menghapus data berdasarkan id
    $query = "DELETE FROM pesan WHERE nama = '$nama'";

    if ($koneksi->query($query) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi
$koneksi->close();

// Redirect kembali ke halaman admin setelah menghapus
header("Location: admin.php");
exit();
?>

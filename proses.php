<?php
    $koneksi = mysqli_connect("localhost","root","","web_uas");

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $menu = $_POST['menu'];
    $pesan = $_POST['pesan'];
    $tanggal = $_POST['tanggal'];
    $submit = $_POST['submit'];

    $query = "INSERT INTO pesan VALUES('$nama','$email','$no_hp','$menu','$pesan','$tanggal','$submit')";

    mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style2.css">
<title>Pesanan Dicatat</title>
</head>
<body>
  <div class="container">
    <h1>Pesanan Anda Telah Dicatat</h1>
    <a href="index.php" class="back-button">Back</a>
  </div>
</body>
</html>

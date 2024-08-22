<?php
// Membuat koneksi ke database MySQL
$conn = mysqli_connect('localhost', 'root', '', 'intern');

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi ke database MySQL gagal: " . mysqli_connect_error());
}

// Jika koneksi berhasil, Anda bisa menampilkan pesan ini (opsional)
echo "";
?>

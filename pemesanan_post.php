<?php
 

include("koneksi.php");

$nama = $_POST['nama_pemesan'];
$nomor = $_POST['nomor_hp'];
$tanggal_perjalanan = $_POST['tanggal_perjalanan'];
$totalorang = $_POST['jumlah_orang'];

// echo $nama;
// echo $nomor;
// echo $tanggal_perjalanan;
// echo $totalorang;

$sql = "INSERT INTO data_user (nama, nomor_hp, tanggal_perjalanan, jumlah_orang) VALUE ('$nama', '$nomor', '$tanggal_perjalanan', '$totalorang')";
$query = mysqli_query($db, $sql);

if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
      
// Display the alert box  
    
    header('Location: index.html?status=sukses');
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
} else {
    // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
    header('Location: index.html?status=gagal');
}






?>
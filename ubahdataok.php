<?php
include("koneksi.php");

$new_nama = $_POST['nama_pemesan'];
$new_nomor = $_POST['nomor_hp'];
$new_tanggal_perjalanan = $_POST['tanggal_perjalanan'];
$new_totalorang = $_POST['jumlah_orang'];


$aku =  $_GET['datanya'] ;
$query = "update data_user SET nama=' ".$new_nama." ', nomor_hp=' ".$new_nomor." ', tanggal_perjalanan=' ".$new_tanggal_perjalanan." ', jumlah_orang=' ".$new_totalorang." ' where id=$aku;";
$result = mysqli_query($db, $query);
// $mydata = mysqli_fetch_assoc($result);
// $deletedataok = 'deletedata.php?datanya='.$dataid;

if( $result ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    // echo alert("Data Berhasil dihapus");
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header('Location: data.php?status=sukses');
} else {
    // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
    header('Location: data.php?status=gagal');
}


?>
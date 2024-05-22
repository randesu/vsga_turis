<?php
include("koneksi.php");
$aku =  $_GET['datanya'] ;
$query = "delete from data_user where id=$aku";
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
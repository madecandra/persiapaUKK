<?php 
$db = mysqli_connect("localhost", "root", "", "lat_ukk");
include "../koneksi/function.php";
include "../koneksi/Petugas.php";

$Petugas = new Petugas();
if(isset($_GET['id_petugas'])){
    if ( $Petugas->hapus($_GET) > 0 ) {
        header ("Location: ../pengguna/daftar_petugas.php");
    }
}


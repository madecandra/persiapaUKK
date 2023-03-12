<?php 
$db = mysqli_connect("localhost", "root", "", "lat_ukk");
include "../koneksi/function.php";
include "../koneksi/kelas.php";

$kelas = new Kelas();
if(isset($_GET['id_kelas'])){
    if ( $kelas->hapus($_GET) > 0 ) {
        header ("Location: ../pengguna/daftar_kelas.php");
    }
}


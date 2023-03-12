<?php 
$db = mysqli_connect("localhost", "root", "", "lat_ukk");
include "../koneksi/function.php";
include "../koneksi/Siswa.php";

$Siswa = new Siswa();
if(isset($_GET['id_siswa'])){
    if ( $Siswa->hapus($_GET) > 0 ) {
        header ("Location: ../pengguna/daftar_siswa.php");
    }
}


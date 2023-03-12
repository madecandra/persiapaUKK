<?php 
    $db = mysqli_connect("localhost", "root", "", "lat_ukk");
    include "../koneksi/Pembayaran.php";

    $pembayaran = new Pembayaran();
    if(isset($_GET['id_spp'])){
        if ( $pembayaran->hapus($_GET) > 0 ) {
            header ("Location: ../petugas/pembayaran_spp.php");
        }
    }
?>

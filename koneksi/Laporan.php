<?php

class Laporan
{
    public $tahun;

    public function __construct($tahun)
    {
        $this->tahun = $tahun;
    }

    public function totalPemasukanBulan($angkaBulan)
    {
        global $db;
        $query = "SELECT SUM(jumlah_bayar) FROM pembayaran WHERE bulan_bayar = '$angkaBulan' AND tahun_bayar = '$this->tahun'";
        
        $result = mysqli_query($db, $query);
        return mysqli_fetch_column($result);
    }
}
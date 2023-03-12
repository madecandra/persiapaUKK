<?php 

class Pembayaran
{
    public function tambah($data)
    {
        global $db;
        $tahun = $data['tahun'];
        $nominal = $data['nominal'];

        $query = "INSERT INTO spp VALUES (null, '$tahun', '$nominal')";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    public function edit($data)
    {
        // cara lebih cepat tapi gak aman
        global $db;
        $tahun = $data['tahun'];
        $nominal = $data['nominal'];
        $id_spp = $data['id_spp'];

        $query = "UPDATE spp SET tahun = '$tahun', nominal = '$nominal' WHERE id_spp = '$id_spp'";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    public function hapus($data)
    {
        global $db;
        $id_spp = $data['id_spp'];

        $query = "DELETE FROM spp WHERE id_spp = '$id_spp' ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }
}

?>
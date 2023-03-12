<?php 

class Kelas 
{
    public function tambah($data)
    {
        global $db;
        $nama = $data['nama_kelas'];
        $komp = $data['kompetensi_keahlian'];

        $query = "INSERT INTO kelas VALUES (null, '$nama', '$komp')";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    public function edit($data)
    {
        // cara lebih cepat tapi gak aman
        global $db;
        $nama = $data['nama_kelas'];
        $komp = $data['kompetensi_keahlian'];
        $id_kelas = $data['id_kelas'];

        $query = "UPDATE kelas SET nama_kelas = '$nama', kompetensi_keahlian = '$komp' WHERE id_kelas = '$id_kelas'";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    public function hapus($data)
    {
        global $db;
        $id_kelas = $data['id_kelas'];

        $query = "DELETE FROM kelas WHERE id_kelas = '$id_kelas' ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }
}

?>
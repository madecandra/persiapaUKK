<?php 

class Petugas
{
    public function tambah($data)
    {
        global $db;
        $username = $data['username'];
        $pass = $data['password'];
        $nama = $data['nama_petugas'];
        $idlevel = $data['id_level'];

        $query = "INSERT INTO petugas VALUES (null, '$username', '$pass', '$nama', '$idlevel')";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    public function edit($data)
    {
        // cara lebih cepat tapi gak aman
        global $db;
        $username = $data['username'];
        $pass = $data['password'];
        $nama = $data['nama_petugas'];
        $idlevel = $data['id_level'];
        $idpetugas = $data['id_petugas'];

        $query = "UPDATE petugas SET username = '$username', password = '$pass', nama_petugas = '$nama', id_level = '$idlevel' WHERE id_petugas = '$idpetugas'";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    public function hapus($data)
    {
        global $db;
        $id_petugas = $data['id_petugas'];

        $query = "DELETE FROM petugas WHERE id_petugas = '$id_petugas' ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }
}

?>
<?php 

    class Siswa
    {
        public function tambah($data)
        {
            global $db;
            $nisn = $data['nisn'];
            $nis = $data['nis'];
            $namas = $data['nama_siswa'];
            $pass = $data['password'];
            $telp = $data['no_telp'];
            $alamat = $data['alamat'];
            $idkls = $data['id_kelas'];
            $idspp = $data['id_spp'];

            $query = "INSERT INTO siswa VALUES (null, '$nisn', '$nis', '$namas', '$pass', '$telp', '$alamat', '$idkls', '$idspp')";
            mysqli_query($db, $query);
            return mysqli_affected_rows($db);
        }

        public function edit($data)
        {
            // cara lebih cepat tapi gak aman
            global $db;
            $nisn = $data['nisn'];
            $nis = $data['nis'];
            $namas = $data['nama_siswa'];
            $pass = $data['password'];
            $telp = $data['no_telp'];
            $alamat = $data['alamat'];
            $idkls = $data['id_kelas'];
            $idspp = $data['id_spp'];
            $idsiswa = $data['id_siswa'];

            $query = "UPDATE siswa SET nisn = '$nisn', nis = '$nis', nama_siswa = '$namas', password = '$pass', no_telp = '$telp', alamat = '$alamat', id_kelas = '$idkls', id_spp = '$idspp'  WHERE id_siswa = '$idsiswa'";
            mysqli_query($db, $query);
            return mysqli_affected_rows($db);
        }

        public function hapus($data)
        {
            global $db;
            $id_siswa = $data['id_siswa'];

            $query = "DELETE FROM siswa WHERE id_siswa = '$id_siswa' ";
            mysqli_query($db, $query);
            return mysqli_affected_rows($db);
        }
    }

?>
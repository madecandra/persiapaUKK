<?php
    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "lat_ukk");

    function registrasi($data)
    {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('user ada sudah');
                </script>";
            return false;
        }

        // cek pass
        if ($password !== $password2) {
            echo "<script>
                    alert('konfirmasi pass tidak sesuai');
                </script>";
            return false;
        }

        // enskripsi pass
        // $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan user ke database
        mysqli_query($conn, "INSERT INTO user(username, password) VALUES('$username', '$password')");

        return mysqli_affected_rows($conn);
    }

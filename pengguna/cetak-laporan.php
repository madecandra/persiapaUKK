<?php 

    $db = mysqli_connect("localhost", "root", "", "lat_ukk");
    include '../koneksi/Laporan.php';

    $laporan = new Laporan($_GET['tahun']);

    $semua_bulan = [
        'Januari' => $laporan->totalPemasukanBulan(1),
        'Februari' => $laporan->totalPemasukanBulan(2),
        'Maret' => $laporan->totalPemasukanBulan(3),
        'April' => $laporan->totalPemasukanBulan(4),
        'Mei' => $laporan->totalPemasukanBulan(5),
        'Juni' => $laporan->totalPemasukanBulan(6),
        'Juli' => $laporan->totalPemasukanBulan(7),
        'Agustus' => $laporan->totalPemasukanBulan(8),
        'September' => $laporan->totalPemasukanBulan(9),
        'Oktober' => $laporan->totalPemasukanBulan(10),
        'November' => $laporan->totalPemasukanBulan(11),
        'Desember' => $laporan->totalPemasukanBulan(12),
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="text-center ">
        <h4>Berikut adalah pemasukan di tahun <?= $_GET['tahun']?></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Pemasukan</th>
                </tr>
            </thead>   
            <tbody>
                <?php foreach($semua_bulan as $nama_bulan => $pemasukan):?>
                    <tr>
                        <td><?= $nama_bulan?></td>
                        <td><?= $pemasukan?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

<script>
    document.onload(window.print());
</script>

</html>
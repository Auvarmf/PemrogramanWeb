<?php
include "SESSION-Login/session-cek.php";
?>

<?php
include 'SESSION-Login/koneksi.php';

// Memanggil kolom yang ada pada tabel mahasiswa
$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa");

// Saat tombol Delete ditekan maka data akan dihapus setelah dikonfirmasi
if (isset($_POST['hapus'])) {
    $npm = $_POST['hapus'];
    // Menghapus data berdasarkan kolom yang dipilih
    $sql = "DELETE FROM mahasiswa WHERE npm = '$npm' ";
}

if (isset($_GET['hapus'])) {
    $sql = mysqli_query($mysqli, "DELETE FROM mahasiswa where npm = '$_GET[hapus]'")
        or die(mysqli_error($mysqli));

    echo "<p><b> Data berhasil dihapus</b></p>"; //Menampilkan tulisan saat data berhasil dihapus
    echo "<meta http-equiv=refresh content=2;URL='home-user.php'>"; //Menghapus tulisan data berhasil dihapus dan melakukan refresh
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Custom fonts for this template -->
    <link href="assets/SBADMIN2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/SBADMIN2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/SBADMIN2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <title>Pemrograman Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/CSS/style-home-user.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'navbar/sidebar.php'
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                include 'navbar/topbar.php'
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Mahasiswa</h1>
                    <p class="mb-4">Berikut ini merupakan tabel yang berisi data Mahasiswa.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NPM</th>
                                            <th>Name</th>
                                            <th>Angkatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($result = mysqli_fetch_assoc($query_mysql)) { ?>
                                        <tr>
                                            <td><?= $result['npm']; ?></td>
                                            <td><?= $result['nama']; ?></td>
                                            <td><?= $result['angkatan']; ?></td>
                                            <td>
                                                <a href="#" data-tip="edit"><i class="fa fa-edit"></i></a>
                                                <a href="?hapus=<?php echo $result['npm']; ?>"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa dengan nama <?= $result['nama'] ?> ?');"
                                                    data-tip="delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Universitas Lampung 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Meninggalkan Halaman?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" dibawah jika ingin mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="SESSION-Login/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/SBADMIN2/vendor/jquery/jquery.min.js"></script>
    <script src="assets/SBADMIN2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/SBADMIN2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/SBADMIN2/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/SBADMIN2/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/SBADMIN2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/SBADMIN2/js/demo/datatables-demo.js"></script>
</body>

</html>
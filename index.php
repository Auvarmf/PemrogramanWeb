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

    <style>
    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://bootstrapious.com/i/snippets/sn-page-split/bg.jpg');
        background-size: cover;
        background-position: center center;
    }
    </style>
</head>

<body>
    <!-- form login -->
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">Welcome</h3>
                                <p class="text-muted mb-4">Selamat datang di website Praktikum Web</p>
                                <form action="SESSION-Login/login.php" method="POST">
                                    <div class="form-group mb-3">
                                        <input id="npm" type="npm" name="npm" placeholder="NPM"
                                            class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="pass" placeholder="Password"
                                            class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">LOGIN</button>
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign
                                        in</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

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
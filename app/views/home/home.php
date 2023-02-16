<?php
$nama = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url; ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url; ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-light sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url; ?>/img/logonav.png" width="150" alt="">
                </div>

            </a>

            <!-- Divider -->
            <a class="sidebar-divider my-0 my-4">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url; ?>/home">
                        <img src="<?= base_url; ?>/img/homeicon.png" width="15" class="mr-3 ml-4">
                        <span>Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-dark" href="<?= base_url; ?>/Nutrisi">
                        <img src="<?= base_url; ?>/img/nutrisiblack.png" width="15" class="mr-3 ml-4">
                        <span>Nutrisi</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= base_url; ?>/Nutrisi/tersimpan">
                        <img src="<?= base_url; ?>/img/simpanblack.png" width="15" class="mr-3 ml-4">
                        <span>Simpan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= base_url; ?>/Home/panduan">
                        <img src="<?= base_url; ?>/img/panduanblack.png" width="15" class="mr-3 ml-4">
                        <span>Panduan</span>
                    </a>
                </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nama; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url; ?>/img/undraw_profile.svg">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url; ?>/Home/akun">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Account
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="background-color: #fff;">

                    <h3 style="color:#C21010; font-weight: 1000;font-family: 'Poppins', sans-serif;">Home</h3>

                    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel"
                        style="background-color: #FFF1F4; border-radius: 30px;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row mt-2">
                                    <div class="col-lg-6 d-flex flex-column justify-content-center mt-5 pt-4 pt-lg-0 order-1 order-lg-2"
                                        data-aos="fade-up" data-aos-delay="200">
                                        <h1>Yuk kelola makananmu
                                            agar lebih sehat.</h1>
                                        <p>Bagi kamu yang ingin menjalani program diet tapi tidak bisa mengontrol
                                            makananmu nah, ini
                                            cocok
                                            banget buat kamu.</p>
                                    </div>
                                    <div class=" col-lg-6 order-2 order-lg-1 hero-img" data-aos="zoom-in"
                                        data-aos-delay="200">
                                        <img src="<?= base_url; ?>/img/foodies.png" class="img-fluid animated" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row mt-2">
                                    <div class="col-lg-6 d-flex flex-column justify-content-center mt-5 pt-4 pt-lg-0 order-1 order-lg-2"
                                        data-aos="fade-up" data-aos-delay="200">
                                        <h1>Yuk kelola makananmu
                                            agar lebih sehat.</h1>
                                        <p>Bagi kamu yang ingin menjalani program diet tapi tidak bisa mengontrol
                                            makananmu nah, ini
                                            cocok
                                            banget buat kamu.</p>
                                    </div>
                                    <div class=" col-lg-6 order-2 order-lg-1 hero-img" data-aos="zoom-in"
                                        data-aos-delay="200">
                                        <img src="<?= base_url; ?>/img/noodlee.png" class="img-fluid animated" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mt-2">
                                    <div class="col-lg-6 d-flex flex-column justify-content-center mt-5 pt-4 pt-lg-0 order-1 order-lg-2"
                                        data-aos="fade-up" data-aos-delay="200">
                                        <h1>Yuk kelola makananmu
                                            agar lebih sehat.</h1>
                                        <p>Bagi kamu yang ingin menjalani program diet tapi tidak bisa mengontrol
                                            makananmu nah, ini
                                            cocok
                                            banget buat kamu.</p>
                                    </div>
                                    <div class=" col-lg-6 order-2 order-lg-1 hero-img" data-aos="zoom-in"
                                        data-aos-delay="200">
                                        <img src="<?= base_url; ?>/img/page2.png" class="img-fluid animated" alt="">
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <?php foreach ($data as $row) : ?>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="<?= $row['snippet']['thumbnails']['medium']['url']?>" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row["snippet"]["title"]?></h5>
                                    <p class="card-text">Channel <?= $row["snippet"]["channelTitle"]?></p>
                                    <a href="https://www.youtube.com/watch?v=<?= $row['id']['videoId']?>"
                                        class="btn btn-danger" target="_blank">Youtube</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer> -->
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
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url; ?>/Logout/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <script src="<?= base_url; ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url; ?>/js/sb-admin-2.min.js"></script>

        <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000
            })
        });
        </script>

</body>

</html>
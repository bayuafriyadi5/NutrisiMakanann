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

    <title>Simpan</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url; ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url; ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-light sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url; ?>/img/logonav.png" width="150" alt="">
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 my-4">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url; ?>/home">
                    <img src="<?= base_url; ?>/img/homeblack.png" width="15" class="mr-3 ml-4">
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
                <a class="nav-link text-danger" href="<?= base_url; ?>/Nutrisi/tersimpan">
                    <img src="<?= base_url; ?>/img/simpanicon.png" width="15" class="mr-3 ml-4">
                    <span>Simpan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url; ?>/Home/panduan"">
                    <img src=" <?= base_url; ?>/img/panduanblack.png" width="15" class="mr-3 ml-4">
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
                                <a class="dropdown-item" href="<?= base_url; ?>/Logout/logout" data-toggle="modal"
                                    data-target="#logoutModal">
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
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
                                     Flasher::Message();
                                     ?>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <?php foreach ($data as $row => $q ) : ?>
                        <?php
                                // var_dump($data);
                                ?>
                        <div class="col-md-4 mb-3 h-100 d-flex align-items-center justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src='<?= $q['image']?>' class="card-img-top" alt="<?= $q['title']?>">
                                <div class="card-body">

                                    <h5 class="card-title"><?= $q['title']?></h5>

                                    <?php foreach ($q['nutrition']['nutrients'] as $key) :?>
                                    <?php    
                                        if ($key['name'] === 'Calories') {
                                        $calories = $key['amount'];
                                        break;
                                    }
                                    ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($q['nutrition']['nutrients'] as $key1) :?>
                                    <?php    
                                        if ($key1['name'] === 'Fat') {
                                        $fat = $key1['amount'];
                                        break;
                                    }
                                    ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($q['nutrition']['nutrients'] as $key2) :?>
                                    <?php    
                                        if ($key2['name'] === 'Protein') {
                                        $protein = $key2['amount'];
                                        break;
                                    }
                                    ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($q['nutrition']['nutrients'] as $key3) :?>
                                    <?php    
                                        if ($key3['name'] === 'Carbohydrates') {
                                        $karbo = $key3['amount'];
                                        break;
                                    }
                                    ?>
                                    <?php endforeach; ?>

                                    <p class="card-text">Kalori : <?= $calories?> <?= $key['unit']?></p>
                                    <p class="card-text">Lemak : <?= $fat?> <?= $key1['unit']?></p>
                                    <p class="card-text">Protein : <?= $protein?> <?= $key2['unit']?></p>
                                    <p class="card-text">Karbohidrat : <?= $karbo?> <?= $key3['unit']?></p>

                                    <?php
                                        $id = $q['id'];
                                        $title = $q['title'];
                                        ?>
                                    <a class="btn btn-danger" href="<?= base_url; ?>/Nutrisi/yutub/ <?= $title;?>">Buat
                                        Sekarang</a>

                                    <a href="<?= base_url; ?>/Nutrisi/hapus/<?= $id ?>" class="btn btn-outline-danger"
                                        style="color">Hapus </a>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url; ?>/js/sb-admin-2.min.js"></script>

</body>

</html>
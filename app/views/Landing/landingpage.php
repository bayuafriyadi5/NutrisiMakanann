<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url; ?>/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-light bg-light justify-content-between">
        <div class="container">
            <a class="navbar-brand">
                <img src="<?= base_url; ?>/img/logonav.png" width="140" height="30" alt="">
            </a>
            <form class="form-inline">
                <a class="btn btn-danger mr-3" href="<?= base_url; ?>/daftar">Daftar</a>
                <a class=" btn btn-outline-danger my-3" href="<?= base_url; ?>/login">Masuk</a>
            </form>
        </div>
    </nav>


    <section id="page1" class="d-flex align-items-center">

        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-6 d-flex flex-column justify-content-center mt-5 pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <div id="page1text">
                        <h1>Yuk kelola makananmu
                            agar lebih sehat.</h1>
                        <p>Bagi kamu yang ingin menjalani program diet tapi tidak bisa mengontrol makananmu nah, ini
                            cocok
                            banget buat kamu.</p>
                    </div>
                    <div id="page1button" class="d-flex justify-content-center justify-content-lg-start mt-3">
                        <a class="btn btn-danger mr-3" href="<?= base_url; ?>/daftar"">Daftar</a>
                        <a class=" btn btn-outline-danger" href="#page2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div id="page1pic" class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url; ?>/img/noodleemerah.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End page1 -->

    <section id="page2" class="d-flex align-items-center mt-5">

        <div class="container mt-5"">
            <div class=" row mt-5">
            <div class="col-lg-6 order-2 order-lg-1 page2-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url; ?>/img/page2merah.png" class="img-fluid animated" alt="">
            </div>
            <div class="col-lg-6 order-1 order-lg-2 page2-img float-right mt-5" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url; ?>/img/page2_text_merah.png" class="img-fluid animated" alt="">
            </div>

        </div>
        </div>

    </section><!-- End page2 -->

    <section id="page3" class="d-flex align-items-center mt-5 mb-5">

        <div class="container mt-5 mb-5">
            <div class=" row mt-5 justify-content-center">
                <img src="<?= base_url; ?>/img/page3_text_merah.png" class="img-fluid animated mt-5" alt="">
                <a class="btn btn-danger mr-3" href="<?= base_url; ?>/daftar"" style=" background: #fff; color: red;
                    }">Daftar</a>
            </div>
        </div>


    </section><!-- End page2 -->

    <section id="page4" class="testimonials text-center bg-light mt-5 mb-5">
        <div class="mb-5 mt-5">
            <div class="container mb-5">
                <h2 class="mb-5">Our Team</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url; ?>/img/benget-2.jpg" alt="..."
                                style="width: 50%;" />
                            <h5>Ari Syafri</h5>
                            <p class="font-weight-light mb-0">"Jadilah diri sendiri"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url; ?>/img/benget-1.jpg" alt="..."
                                style="width: 50%;" />
                            <h5>Bayu Afriyadi</h5>
                            <p class="font-weight-light mb-0">"Kenapa singa dan harimau berbeda? karena singa lion dari
                                yang
                                lion"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url; ?>/img/benget-3.jpg" alt="..."
                                style="width: 50%;" />
                            <h5>Vidi Anandisa</h5>
                            <p class="font-weight-light mb-0">"kalau hidupmu malang coba pindah ke bandung</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3 mb-5">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url; ?>/img/benget-4.jpg" alt="..."
                                style="width: 50%;" />
                            <h5>Alvin Izza Rohman</h5>
                            <p class="font-weight-light mb-0">"Seakan-akan bullshit usaha dan doa teh, tapi gpp jalanin
                                aja"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url; ?>/img/benget-5.jpg" alt="..."
                                style="width: 50%;" />
                            <h5>Habib Asrib Ikram</h5>
                            <p class="font-weight-light mb-0">"Tugas bombe padamkan api je?"</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class=" text-center text-white mt-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center mb-3">
                        <!--Grid column-->
                        <div class="col-md-4 mt-3">

                            <img src="<?= base_url; ?>/img/logoputih.png" width="170" height="40" alt="">

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mt-3">
                            <!-- Email input -->
                            <div class="form-outline form-white mt-2">
                                <a href="#page4">Our Team</a>
                            </div>
                        </div>

                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mt-2">
                            <!-- Submit button -->
                            <img src="<?= base_url; ?>/img/un.png" width="130" height="50" alt="">
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="">Foodiet</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="<?= base_url; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url; ?>/js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
    function reply_click(clicked_id) {

        $('html, body').animate({
            scrollDown: $(clicked_id).offset().top
        }, 2000);

    }
    </script>
</body>

</html>
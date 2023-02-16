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
    <section class="vh-100 mt-5">
        <div class="login_page container-fluid h-custom">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
                    <div class="col-md-5">
                        <img src="<?= base_url; ?>/img/imagedaftar.png" class="img-fluid" alt=" Sample image">
                    </div>
                    <div class="col-md-5">
                        <form action="<?= base_url; ?>/daftar/prosesDaftar" method="post">
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <img src="<?= base_url; ?>/img/logonav.png" width="150" alt="">
                            </div>

                            <div class="divider d-flex align-items-center justify-content-center my-4 mb-5">
                                <h4 class="text-center fw-bold  mb-0">Daftar gratis untuk mulai program diet</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                     Flasher::Message();
                                     ?>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Siapa nama kamu</label>
                                <input type="text" id="form3Example3" class="form-control form-control-md"
                                    placeholder="Nama" name="nama" />

                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Username kamu</label>
                                <input type="text" id="form3Example3" class="form-control form-control-md"
                                    placeholder="Username" name="username" />

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password kamu</label>
                                <input type="password" id="form3Example4" class="form-control form-control-md"
                                    placeholder="Password" name="password" />

                            </div>


                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button class="btn btn-danger" type="submit">Masuk</button>
                                <p class=" small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a
                                        href="<?= base_url; ?>/login" class="link-danger">Masuk</a></p>
                                <p class=" small fw-bold mt-0 pt-1 mb-0"><a href="<?= base_url; ?>">kembali</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
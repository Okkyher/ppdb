<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=“PPDB Online SMK ICHWAN Tahun 2024 / 2025“>
    <meta name="author" content=“PPDB Online SMK ICHWAN Tahun 2024 / 2025”>

    <title>PPDB ONLINE SMK IM SOLUSI 2024/2025</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="dist/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="dist/css/landing-page.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="./">SMK ICHWAN</a>
            <a class="btn btn-primary" href="./?page=pendaftaran">Daftar</a>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">PPDB ONLINE SMK ICHWAN 2024/ 2025</h1>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form>
                            <div class="form-row">
                                <div class="col-9 col-md-5 mx-auto">
                                    <a href="./?page=login" class="mt-2 btn btn-block btn-lg btn-primary">Login</a>
                                </div>
                                <div class="col-9 col-md-5 mx-auto">
                                    <a href="./?page=pendaftaran" class="mt-2 btn btn-block btn-lg btn-primary">Daftar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </header>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <!--<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('./img/Screenshot_260.png');">-->
                <div class="col-lg-6 order-lg-2 text-white">
                    <img src="dist/img/Screenshot_260.png" style="width:100%;" alt="">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Panduan Pendaftaran</h2>
                    <p class="lead mb-0">Berikut alur Pendaftaran Penerimaan Siswa Baru SMK ICHWAN Th.2024/ 2025</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center" style="background: url(dist/img/Gedung-Kelas-Akhwat-2048x1152.jpg) no-repeat center center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Kontak Panitia PPDB</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-xl-5 mx-auto">
                                <button type="button" onclick="toWhatsap()" class="btn btn-block btn-lg btn-primary">Whatsapp</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="./">Beranda</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#" onclick="toWhatsap()">Whatsapp Admin</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a target="_blank" href="./?page=pendaftaran">Website</a>
                        </li>

                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; TIM IT CGP SMK IM SOLUSI</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="./#">
                                <i class="fa fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="./#">
                                <i class="fa fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="./#">
                                <i class="fa fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function toWhatsap() {
            var nowhatsap = '6282137374862';
            window.open('https://api.whatsapp.com/send?phone=' + nowhatsap, '_blank');
        }
    </script>

</body>

</html>
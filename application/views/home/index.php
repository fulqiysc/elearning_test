<!doctype html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="SZCvw4Xsmkn63PkaMl8W0XVo7aXNjyZEZKxBDG_vloI" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="MI Maarif">
    <!-- Keywords -->
    <meta name="keywords" content="MI Maarif">
    <!-- Author -->

    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?= base_url('assets/mi/mimarif.png'); ?>">
    <!-- <meta property="og:site_name" content="https://ikhza.com" /> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--Fav-->
    <link rel="shortcut icon" href="<?= base_url('assets/mi/mimarif.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/mi/mimarif.png'); ?>" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/mi/mimarif.png'); ?>">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            min-height: 2000px;
        }

        /* Jumbotron */
        .jumbotron {
            background: url(assets/mi/main.png);
            background-size: cover;
            height: 300px;
            position: relative;
            z-index: -1;
        }

        .jumbotron::after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 50%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            bottom: 0;
        }

        .jumbotron .container {
            color: white;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .jumbotron .display-4 {
            font-weight: 200;
            font-size: 2.6em;
            margin-top: 100px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
            margin-bottom: 50px;
        }

        .jumbotron .display-4 span {
            font-weight: 500;
        }


        #projects {
            background-color: #2ec670;
        }

        section {
            padding-top: 5rem;
        }


        body {
            margin-top: 20px;
        }

        .timeline {
            border-left: 3px solid #727cf5;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
            background: rgba(114, 124, 245, 0.09);
            margin: 0 auto;
            letter-spacing: 0.2px;
            position: relative;
            line-height: 1.4em;
            font-size: 1.03em;
            padding: 50px;
            list-style: none;
            text-align: left;
            max-width: 40%;
        }

        @media (max-width: 767px) {
            .timeline {
                max-width: 98%;
                padding: 25px;
            }
        }

        .timeline h1 {
            font-weight: 300;
            font-size: 1.4em;
        }

        .timeline h2,
        .timeline h3 {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .timeline .event {
            border-bottom: 1px dashed #e8ebf1;
            padding-bottom: 25px;
            margin-bottom: 25px;
            position: relative;
        }

        @media (max-width: 767px) {
            .timeline .event {
                padding-top: 30px;
            }
        }

        .timeline .event:last-of-type {
            padding-bottom: 0;
            margin-bottom: 0;
            border: none;
        }

        .timeline .event:before,
        .timeline .event:after {
            position: absolute;
            display: block;
            top: 0;
        }

        .timeline .event:before {
            left: -207px;
            content: attr(data-date);
            text-align: right;
            font-weight: 100;
            font-size: 0.9em;
            min-width: 120px;
        }

        @media (max-width: 767px) {
            .timeline .event:before {
                left: 0px;
                text-align: left;
            }
        }

        .timeline .event:after {
            -webkit-box-shadow: 0 0 0 3px #727cf5;
            box-shadow: 0 0 0 3px #727cf5;
            left: -55.8px;
            background: #fff;
            border-radius: 50%;
            height: 9px;
            width: 9px;
            content: "";
            top: 5px;
        }

        @media (max-width: 767px) {
            .timeline .event:after {
                left: -31.8px;
            }
        }

        .rtl .timeline {
            border-left: 0;
            text-align: right;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            border-right: 3px solid #727cf5;
        }

        .rtl .timeline .event::before {
            left: 0;
            right: -170px;
        }

        .rtl .timeline .event::after {
            left: 0;
            right: -55.8px;
        }


        /* RESPONSIVE */
        @media (min-width: 992px) {

            .jumbotron {
                margin-top: -50px;
                height: 700px;
            }


            .jumbotron .display-4 {
                font-size: 5em;
                margin-top: 100px;
            }
        }
    </style>
    <title> E-Learning MI MA'ARIF NU SUNYALANGU</title>
</head>

<body id="home">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color:#1b9a52;">
        <div class="container">

            <!-- Image and text -->
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="<?= base_url('home'); ?>" style="font-size: 18px">
                    <img src="<?= base_url('assets/mi/mimarif.png'); ?>" width=" 32" height="32" class="d-inline-block align-top" alt="" style="font-size: 5px;">
                    E-Learning MI MA'ARIF NU SUNYALANGU
                </a>
            </nav>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#projects">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('auth'); ?>">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->



    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="margin-top: 90px">
        <div class="container img-fluid">

        </div>
    </div>
    <!-- akhir Jumbotron -->




    <!-- About -->
    <section id="about">

        <div class="container  text-center">

            <div class="row justify-content-center fs-5">

                <div class="col-lg-8">
                    <p class="text-left" style="font-size: 21px">E-learning merupakan pembelajaran yang digunakan untuk
                        memudahkan pendidik serta peserta didik untuk mengakses proses
                        belajar mengajar yang dilakukan secara online.
                        <br>E-learning madrasah juga menyediakan menu bagi guru untuk
                        membagikan bahan ajar yang akan disampaikan kepada peserta
                        didik. Guru bisa membuat kelas sebanyak kelas yang diampu oleh
                        guru tersebut, baik itu guru mata pelajaran, guru kelas ataupun guru
                        bimbingan konseling
                    </p>

                </div>



            </div>

            <div class="col-lg mt-4">
                <h6 style="font: 30px Viga;" class="card-title">Informasi MI MA'ARIF NU SUNYALANGU</h6>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6">


                        <div class="card">
                            <a href="https://rhtapps.redhat.com/verify?certId=220-074-413" class="text-decoration-none text-danger" target="_blank">
                                <img src="<?= base_url('assets/mi/satuan.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">

                            </a>
                        </div>

                    </div>
                </div>

            </div>








    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2ec670" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,85.3C384,128,480,224,576,229.3C672,235,768,149,864,149.3C960,149,1056,235,1152,245.3C1248,256,1344,192,1392,160L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <!-- End About -->



    <!-- Project -->
    <section id="projects">






        <div class="container text-center">




            <div class="row justify-content-center mb-5">
                <div class="col-lg-6">


                </div>
            </div>





            <div col="col-lg">
                <h6 style="font: 40px Viga;color: azure;" class="card-title mb-5">Galery</h6>

            </div>

            <div class="row">


                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto1.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>


                <div class="col-lg-3 mb-3">

                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto2.jpg'); ?>" class="card-img-top" alt="..." height="240">


                        </a>

                    </div>
                </div>


                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="https://ltmbanyumas.com/" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto3.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>



                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto4.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>


                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto5.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>


                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto6.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>


                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto7.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>



                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="#" class="text-decoration-none text-danger" target="_blank">
                            <img src="<?= base_url('assets/mi/foto8.jpg'); ?>" class="card-img-top" alt="..." height="240">

                        </a>

                    </div>
                </div>



            </div>


        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,277.3C384,299,480,277,576,250.7C672,224,768,192,864,170.7C960,149,1056,139,1152,149.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End Project -->



    <!-- Contact -->

    <section id="contact">
        <div class="container">

            <div col="col-lg">
                <h2 class="text-center mb-3">Contact Us</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <p style="color: #2ec670" class="mt-3"><i class="fa fa-envelope-o" aria-hidden="true"></i><i class="bi bi-envelope"></i> Email: misunyalangugmail.com</p>

                </div>
            </div>


        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2ec670" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,176C384,171,480,117,576,128C672,139,768,213,864,224C960,235,1056,181,1152,160C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End Contact -->


    <footer style="background-color: #2ec670;" class="text-center pb-5">

        <p style="color:white;">Copyright© MI MA'ARIF NU SUNYALANGU 2023.</a> </p>

    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



</body>

</html>
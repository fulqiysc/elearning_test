<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link href="<?= base_url(''); ?>assets/sbadmin/dist/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(''); ?>assets/css/style.css" rel="stylesheet" />

    <!--Fav-->
    <link rel="shortcut icon" href="<?= base_url('assets/mi/mimarif.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/mi/mimarif.png'); ?>" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/mi/mimarif.png'); ?>">

    <style>
        .hilang {
            display: none;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #1b9a52">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-0 rounded-lg mt_login ">
                                <div class=" rounded-0 card-header" style="background-color: #1b9a52">
                                    <h3 class="text-center text-light my-3 font-weight-bold">E-Learning</h3>
                                    <h5 class="text-center text-light my-3 font-weight-bold">MI MA'ARIF NU SUNYALANGU</h5>

                                    <img src="<?= base_url('assets/mi/mimarif.png'); ?>" alt="MI Maarif" class="rounded mx-auto d-block img-thumbnail logo_univ">

                                </div>

                                <div class="card-body bg-light">
                                    <form method="post" action="<?= base_url('auth'); ?>">


                                        <div class="form-group">
                                            <?= $this->session->flashdata('sukses'); ?>
                                            <label class="small mb-1 font-weight-bold" style="color: #1b9a52;" for="inputEmailAddress">Email</label>

                                            <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" value="<?= set_value('email'); ?>" />
                                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        </div>

                                        <div class="form-group" style="margin-top: -18px;">
                                            <label class="small mb-1 font-weight-bold" style="color: #1b9a52" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" value="<?= set_value('password'); ?>" />
                                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                        </div>

                                        <div class="form-group d-flex align-items-center  mb-0">
                                            <a class="small font-weight-bold" style="color: #1b9a52;" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>





                                            <button type="submit" class="btn  text-light ml-auto" style="background-color: #1b9a52;">
                                                Login

                                            </button>

                                            <!-- 
                                            <button type="submit" class="btn text-light ml-auto" style="background-color: #1b9a52;">
                                                <div class="spinner-border text-primary hilang" role="status">
                                                    <span class="sr-only">Loading...</span>

                                                </div>
                                                Login
                                            </button>

                                            <div class="result"></div> -->



                                        </div>

                                    </form>

                                </div>


                            </div>
                            <div class="card-footer text-center" style="background-color:#1d984e;">
                                <div class="small"><a href="<?= base_url('auth/registration'); ?>" style="color: white;">Need an account? Sign up!</a>
                                    <a href="<?= base_url('home'); ?>" class="text-white font-weight-bold">or Back to Home</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer" style="margin-top: 18px;">
            <footer class="py-3 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="text-center">
                        <div class="text-dark text-center">Copyright &copy; MI MA'ARIF NU SUNYALANGU 2023.</div>
                        <div>

                        </div>


                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(''); ?>assets/sbadmin/src/js/scripts.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $(".btn").on("click", function() {
                $(".spinner-border").removeClass("hilang");
                $(".btn").attr("disabled", true);
                $("sr-only").text("Loading");

                setTimeout(function() {
                    $(".spinner-border").addClass("hilang");
                    $(".btn").attr("disabled", false);
                    $("sr-only").text("Loading");


                }, 1000);


            });

        });
    </script> -->

</body>

</html>
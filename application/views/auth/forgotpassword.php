<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--Fav-->
    <link rel="shortcut icon" href="<?= base_url('assets/mi/mimarif.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/mi/mimarif.png'); ?>" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/mi/mimarif.png'); ?>">
    <title><?= $title; ?></title>
    <link href="<?= base_url(''); ?>assets/sbadmin/dist/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(''); ?>assets/css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #2ec670;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt_login">
                                <div class="card-header" style="background-color: #1b9a52;">

                                    <h3 class="text-center font-weight-light my-4 text-light">Password Recovery</h3>
                                </div>
                                <div class="card-body">

                                    <div class="small mb-3 text-dark ">Enter your email address and we will send you a link to reset your password.</div>
                                    <form method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                                        <div class="form-group">
                                            <?= $this->session->flashdata('sukses'); ?>
                                            <label class="small mb-1 font-weight-bold" style="color: #1b9a52;" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" name="email" type="text" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small font-weight-bold" style="color: #1b9a52;" href="<?= base_url('auth'); ?>">Back to login...</a>
                                            <button type="submit" class="btn text-light" style="background-color: #1b9a52;">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center" style="background-color:#1b9a52;">
                                    <div class="small"><a href="<?= base_url('auth/registration'); ?>" class="text-light">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="align-items-center justify-content-between small">
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
    <script src="js/scripts.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Required meta tags -->

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Login</title>
            <link rel="shortcut icon" href="<?= base_url('assets/brand_logo') ?>/collapse-kitsu-library.png">

        <!-- plugins:css -->

            <link rel="stylesheet" href="<?= base_url('template') ?>/vendors/feather/feather.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/vendors/ti-icons/css/themify-icons.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/vendors/css/vendor.bundle.base.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/css/vertical-layout-light/style.css">
            <!-- <link rel="shortcut icon" href="../../images/favicon.png"> -->

    </head>

    <body>

        <div class="container-scroller">

            <div class="container-fluid page-body-wrapper full-page-wrapper">

                <div class="content-wrapper d-flex align-items-center auth px-0">
                    
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">

                        <?php if (session() -> get('message')) { ?>
                    
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Akun</strong> <?= session() -> getFlashdata('message') ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php } ?>

                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>

                                <form action="<?= base_url('/home/authentication_login') ?>" class="pt-3" method="post">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username" focus required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                    </div>

                                    <div class="text-center mt-4 font-weight-light">Don't have an account? <a href="/Home/register" class="text-primary">Create</a></div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

        <script src="<?= base_url('template') ?>/vendors/js/vendor.bundle.base.js"></script>
        <script src="<?= base_url('template') ?>/js/off-canvas.js"></script>
        <script src="<?= base_url('template') ?>/js/hoverable-collapse.js"></script>
        <script src="<?= base_url('template') ?>/js/template.js"></script>
        <script src="<?= base_url('template') ?>/js/settings.js"></script>
        <script src="<?= base_url('template') ?>/js/todolist.js"></script>

    </body>

</html>

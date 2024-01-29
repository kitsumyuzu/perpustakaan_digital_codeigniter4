<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Register</title>
        <!-- plugins:css -->
            <link rel="stylesheet" href="<?= base_url('template') ?>/vendors/feather/feather.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/vendors/ti-icons/css/themify-icons.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- inject:css -->
            <link rel="stylesheet" href="<?= base_url('template') ?>/css/vertical-layout-light/style.css">
        <!-- endinject -->
            <link rel="shortcut icon" href="<?= base_url('assets/brand_logo') ?>/collapse-kitsu-library.png">
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <h4>New here?</h4>
                                <form action="/Home/signup" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="confirm_password" placeholder="Confirm Password" required>
                                    </div>

                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium">SIGN UP</button>

                                    <div class="text-center mt-4 font-weight-light">
                                        Already have an account? <a href="/Home/" class="text-primary">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- container-scroller -->

            <!-- plugins:js -->
                <script src="<?= base_url('template') ?>/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            
            <!-- inject:js -->
                <script src="<?= base_url('template') ?>/js/off-canvas.js"></script>
                <script src="<?= base_url('template') ?>/js/hoverable-collapse.js"></script>
                <script src="<?= base_url('template') ?>/js/template.js"></script>
                <script src="<?= base_url('template') ?>/js/settings.js"></script>
                <script src="<?= base_url('template') ?>/js/todolist.js"></script>
            <!-- endinject -->

                <script>

                    document.addEventListener('DOMContentLoaded', function() {

                        var password = document.getElementById('password');
                        var confirm_password = document.getElementById('confirm_password');

                        function validatePassword() {

                            if (password.value != confirm_password.value) {

                                confirm_password.setCustomValidity('Please make sure its the correct password');

                            } else {

                                confirm_password.setCustomValidity('');

                            }

                        }

                        password.addEventListener('change', validatePassword);
                        confirm_password.addEventListener('keyup', validatePassword);

                    });

                </script>
    </body>

</html>

<?php
/* Smarty version 3.1.31, created on 2017-12-01 14:14:05
  from "/var/www/html/gecamfac/login/view/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a21b80db04362_05587461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfcf30c6007dd258ed43cfb4dea87c3af68a5a34' => 
    array (
      0 => '/var/www/html/gecamfac/login/view/login.tpl',
      1 => 1511904757,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a21b80db04362_05587461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- - var menuBorder = true-->
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login with Background Image - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../resources/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../resources/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="../resources/app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Easily Using</span>
                                </h6>
                            </div>
                            <!--
                            <div class="card-content">
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                                        <span class="fa fa-linkedin font-medium-4"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                                        <span class="fa fa-github font-medium-4"></span>
                                    </a>
                            </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>OR Using Account Details</span>
                                </p>
                                -->
                                <div class="card-body">
                                    <form class="form-horizontal" id="formLog" novalidate>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" id="user-name" name="user-name"
                                                   placeholder="Your Username" required data-validation-required-message="El nombre de usuario es requerido">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            <p class="help-block text-danger"></p>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control" id="user-password"
                                                   name="user-password" placeholder="Enter Password" required
                                                   data-validation-required-message= "La contraseña es requerida">
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                            <p class="help-block text-danger"></p>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary btn-block" id="logIn">
                                            <i class="ft-unlock"></i>
                                            Login
                                        </button>
                                    </form>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>New to Stack ?</span>
                                </p>
                                <div class="card-body">
                                    <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer fixed-bottom footer-dark navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                                                                     target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights
        reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>


<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<script src="../resources/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="../resources/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
        type="text/javascript"></script>
<script src="../resources/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="../resources/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../resources/app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END STACK JS-->

<!-- BEGIN PAGE LEVEL JS-->
<script src="js/main.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html><?php }
}

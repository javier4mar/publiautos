<?php
/* Smarty version 3.1.31, created on 2017-12-26 14:07:27
  from "/usr/share/nginx/html/global/view/accesoDenegado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a42abffb46a01_25529552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd831aa7a52c270e767d5daf24b598ce1884bbcf' => 
    array (
      0 => '/usr/share/nginx/html/global/view/accesoDenegado.tpl',
      1 => 1514318844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a42abffb46a01_25529552 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="apple-touch-icon" href="../resources/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../resources/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/forms/selects/select2.min.css">

    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0 text-center">
                                <img src="../resources/app-assets/images/portrait/small/avatar-s-1.png" alt="unlock-user"
                                     class="rounded-circle img-fluid center-block">
                                <h5 class="card-title mt-1"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</h5>
                            </div>
                            <div class="card-content">
                                <div class="card-header bg-transparent border-0">
                                    <h2 class="error-code text-center mb-2"><i class="fa fa-times fa-3x text-danger"></i></h2>
                                    <h3 class="text-uppercase text-center">¡ Acceso Restringido !</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['body_message']->value;?>
</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="../home/" class="btn btn-outline-primary btn-lg btn-block">
                                                <i class="fa fa"></i>
                                                Regresar
                                            </a>
                                        </div>
                                    </div>


                                   <!-- <form class="form-horizontal" id="formLog" novalidate>
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-md-6 text-center text-sm-left">
                                                <fieldset>
                                                    <select class="select2-data-ajax form-control" id="select2-ajax1" required style="width: 100%" data-validation-required-message="La empresa es requerida">
                                                        <?php echo $_smarty_tpl->tpl_vars['emp_options']->value;?>

                                                    </select>
                                                    <p class="help-block text-danger"></p>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link"><i class="ft-unlock"></i> Forgot Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                                            <i class="ft-unlock"></i>
                                            Ingresar
                                        </button>
                                        <a href="#" class="btn btn-outline-danger btn-lg btn-block" id="outPro"><i class="ft-power"></i> Salir</a>
                                    </form> -->
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
<!-- BEGIN VENDOR JS-->
<?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/vendors.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
        type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<?php echo '<script'; ?>
 src="../resources/app-assets/js/core/app-menu.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/app-assets/js/core/app.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../global/js/global.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="js/usuarioEmpresa.js" type="text/javascript"><?php echo '</script'; ?>
> -->
<!-- END PAGE LEVEL JS-->
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.33, created on 2019-04-16 20:23:21
  from '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/login/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb68e190c8703_01038922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f383a019c90f70213e4815aaba4450c4b10f17b' => 
    array (
      0 => '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/login/view/login.tpl',
      1 => 1555467780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb68e190c8703_01038922 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['appDescription']->value;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
        <meta name="robots" content="*">
        <link rel="icon" href="#" type="image/x-icon">
        <link rel="shortcut icon" href="#" type="image/x-icon">

        <!-- CSS Style -->
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/font-awesome.css" media="all">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/bootstrap-select.css">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/revslider.css" >
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/jquery.mobile-menu.css">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="../resources/stylesheet/responsive.css" media="all">
        <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/forms/selects/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/extensions/toastr.css">
        <link rel="stylesheet" type="text/css" href="../resources/app-assets/vendors/css/modal/sweetalert.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
    </head>
    <body>
        <div id="page">

            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


            <div class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title">
                                <h2>Ingrese o cree una cuenta</h2>
                            </div>
                        </div>
                        <!--col-xs-12-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>


            <!-- BEGIN Main Container -->  

            <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     

                <div class="main">                     
                    <div class="account-login container">
                        <!--page-title-->

                        <form action="#" method="post" id="login-form">
                            <fieldset class="col2-set">
                                <div class="col-1 new-users"> 
                                    <strong>Nuevos Usuarios</strong>    
                                    <div class="content">
                                        <p>Al crear una cuenta en PubliAutosCR, podrá administrar mejor sus publicaciones, ver estadisticas, sus ofertas de forma mas rapida!</p>
                                        <div class="buttons-set">
                                            <a href="../signup"><button type="button" title="Create an Account" class="button create-account"><span><span>Crear una cuenta</span></span></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 registered-users">
                                    <strong>Usuarios Registrados</strong>             
                                    <div class="content">

                                        <p>Si usted ya tiene una cuenta, por favor ingrese aquí.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label for="email">Correo Electronico<em class="required">*</em></label>
                                                <div class="input-box">
                                                    <input type="text" name="username" value="" id="username" class="input-text" title="Correo Electronico" autocomplete="false">
                                                </div>
                                            </li>
                                            <li>
                                                <label for="pass">Contraseña<em class="required">*</em></label>
                                                <div class="input-box">
                                                    <input type="password" name="password" class="input-text " id="password" title="Password">
                                                </div>
                                            </li>
                                        </ul>

                                        <p class="required">* Campos Requeridos</p>



                                        <div class="buttons-set">

                                            <button type="button" class="button login" title="Ingresar" name="send" id="send"><span>Ingresar</span></button>

                                            <a href="./?forget" class="forgot-word">¿Olvido su contraseña?</a>
                                        </div> <!--buttons-set-->
                                    </div> <!--content-->                               
                                </div> <!--col-2 registered-users-->
                            </fieldset> <!--col2-set-->
                        </form>

                    </div> <!--account-login-->

                </div><!--main-container-->

            </div> <!--col1-layout-->
            <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

        </div>
        <!--page-->
        <?php echo $_smarty_tpl->tpl_vars['mobileMenu']->value;?>

        <!-- JavaScript --> 
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/vendors.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/modal/sweetalert.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/extensions/jquery.blockUI.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/validation/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.min.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/bootstrap.min.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/parallax.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/revslider.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/common.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.bxslider.min.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.flexslider.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/owl.carousel.min.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.mobile-menu.min.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
"><?php echo '</script'; ?>
>
        <!-- BEGIN VENDOR JS-->

        <?php echo '<script'; ?>
 src="../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/login.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>

    </body>
</html><?php }
}

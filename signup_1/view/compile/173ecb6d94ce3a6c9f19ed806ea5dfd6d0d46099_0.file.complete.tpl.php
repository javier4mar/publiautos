<?php
/* Smarty version 3.1.33, created on 2019-04-15 22:47:02
  from '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/complete/view/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb55e461f4020_43412631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '173ecb6d94ce3a6c9f19ed806ea5dfd6d0d46099' => 
    array (
      0 => '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/complete/view/complete.tpl',
      1 => 1555389884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb55e461f4020_43412631 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" href="../resources/app-assets/vendors/css/croppie.css" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
        <style>#my-image, #use {
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="page">

            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


            <div class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title">
                                <h2>Bienvenido</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	

            <!-- BEGIN Main Container col2-right -->
            <section class="main-container col2-right-layout">
                <div class="main container">
                    <div  class="entry-content">
                        <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
                            <div class="my-account">

                                <!--page-title--> 
                                <!-- BEGIN DASHBOARD-->
                                <div class="dashboard">

                                    <div class="content">
                                        <form class="form-horizontal" id="form-complete-profile" novalidate runat="server">

                                            <h1>Mi Perfil</h1>

                                            <ul class="form-list" >


                                                <li>
                                                    <label for="profile">Que perfil de usuario eres?<em class="required">*</em></label>
                                                    <div class="input-box">
                                                        <select name="profile" id="profile" class="select2 form-control" style="width:100%">
                                                            <?php echo $_smarty_tpl->tpl_vars['optionsProfile']->value;?>

                                                        </select>
                                                    </div>
                                                </li>

                                                <li class="commercial">
                                                    <label for="image">Logo<em class="required">*</em></label>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="actions">
                                                                <a class="btn file-btn">
                                                                    <span>Upload</span>
                                                                    <input  type="file" id="imgInp" value="Seleccione una imagen" accept="image/*" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6" style="margin: 5px">
                                                            <img id="my-image" src="#" />
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="commercial">
                                                    <label clasfor="commercial" >Nombre comercial<em class="required">*</em></label>
                                                    <div class="input-box ">
                                                        <input type="text" name="nameCommercial" class="form-control"  id="nameCommercial" class="input-text required-entry validate-email" title="name" required>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="email">Tipo identificacion<em class="required">*</em></label>
                                                    <div class="input-box">
                                                        <select name="iden" id="iden" class="select2 form-control" style="width:100%">
                                                            <?php echo $_smarty_tpl->tpl_vars['optionsIden']->value;?>

                                                        </select>
                                                    </div>
                                                </li>

                                                <li>
                                                    <label for="email">Numero de identificacion<em class="required">*</em></label>
                                                    <div class="input-box">
                                                        <input type="text" name="numIdem" class="form-control"  id="numIdem" class="input-text required-entry validate-email" title="ID number" required
                                                               >
                                                    </div>
                                                </li>

                                                <li>
                                                    <label for="email">Telefono<em class="required">*</em></label>
                                                    <div class="input-box">
                                                        <input type="text" name="phone" class="form-control"  id="phone" class="input-text required-entry validate-email" title="Last Name" required
                                                               >
                                                    </div>
                                                </li>

                                                <li>
                                                    <label for="email">Telefono movil<em class="required"></em></label>
                                                    <div class="input-box">
                                                        <input type="text" name="mobilephone" class="form-control"  id="mobilephone" class="input-text required-entry validate-email" title="Last Name" required
                                                               >
                                                    </div>
                                                </li>

                                                <div class="commercial">
                                                    <h1>Ubicacion</h1>

                                                    <li>
                                                        <label for="email">Dirección<em class="required">*</em></label>
                                                        <div class="input-box">
                                                            <textarea class="form-control" rows="5" maxlength="250" id="address" name ="address" required ></textarea>

                                                        </div>
                                                    </li>


                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div id="mappicker" style="width: 100%; height: 300px;"></div>
                                                        </div>

                                                        <div class="col-lg-12" style="margin-top: 5px">
                                                            <div class="form-group col-sm-5">
                                                                <label for="longitud">Longitud*</label>
                                                                <input type="text"   class="form-control" id="longitude" name="longitude" value="" required>
                                                            </div>
                                                            <div class="form-group col-sm-2">

                                                            </div>
                                                            <div class="form-group col-sm-5">
                                                                <label for="latitud">Latitud*</label>
                                                                <input type="text"   class="form-control" id="latitude" name="latitude" value="" required>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <h1>Redes Sociales</h1>

                                                    <li>
                                                        <label for="email">Pagina Web <em class="required"></em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="web" class="form-control"  id="web" class="input-text " title="Web" required
                                                                   >
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="email">Pagina de Facebook<em class="required"></em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="fb" class="form-control"  id="fb" class="input-text " title="Facebook" required
                                                                   >
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <label for="email">Pagina de Instragram<em class="required"></em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="instam"  id="instam" class="input-text " title="Instamgram" required
                                                                   >
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="email">Pagina de Twitter<em class="required"></em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="twitter" class="form-control"  id="twitter" class="input-text " title="twitter" required
                                                                   >
                                                        </div>
                                                    </li>

                                                </div>

                                            </ul>
                                            <center> <p ><b>Importante:</b> Tu datos no seran expuestos al publico, sin tu concentimiento.</p> </center>


                                            <p class="required">* Campos Requeridos</p>



                                            <div class="buttons-set">
                                                <button type="button" class="button login" title="profile" name="send" id="send"><span>Guardar Perfil</span></button>
                                            </div> 
                                        </form>
                                    </div>




                                </div>
                            </div>
                        </section>
                        <!--col-main col-sm-9 wow bounceInUp animated-->
                        <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">

                            <div class="custom-slider">
                                <div>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active"><img src="images/slide3.jpg" alt="slide3">
                                                <div class="carousel-caption">
                                                    <h3><a title=" Sample Product" href="#">50% OFF</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <a class="link" href="#">Buy Now</a></div>
                                            </div>
                                            <div class="item"><img src="images/slide1.jpg" alt="slide1">
                                                <div class="carousel-caption">
                                                    <h3><a title=" Sample Product" href="#">Hot collection</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="item"><img src="images/slide2.jpg" alt="slide2">
                                                <div class="carousel-caption">
                                                    <h3><a title=" Sample Product" href="#">Summer collection</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a></div>
                                </div>
                            </div>
                        </aside>
                        <!--col-right sidebar col-sm-3 wow bounceInUp animated--> 
                    </div>
                    <!--row--> 
                </div>
                <!--main container--> 
            </section>
            <!--main-container col2-left-layout--> 



            <!-- For version 1,2,3,4,6 -->

            <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

            <!-- End For version 1,2,3,4,6 -->

        </div>
        <!--page-->
        <!-- Mobile Menu-->
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
 type="text/javascript" src='http://maps.google.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['googleMapsKey']->value;?>
'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/jquery-locationpicker/dist/locationpicker.jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/app-assets/vendors/js/croppie.js"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 src="../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/complete.js?<?php echo $_smarty_tpl->tpl_vars['versionJs']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/parallax.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/revslider.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/common.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.bxslider.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.flexslider.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/owl.carousel.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.mobile-menu.min.js"><?php echo '</script'; ?>
>
        <!-- BEGIN VENDOR JS-->


    </body>
</html><?php }
}

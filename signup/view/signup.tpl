<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Harrier Dashboard Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Default Description">
        <meta name="keywords" content="fashion, store, E-commerce">
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

            {$header}

            <div class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title">
                                <h2>Registro de Usuario</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	

            <!-- BEGIN Main Container col2-right -->
            <section class="main-container col2-right-layout">
                <div class="main container">
                    <div class="row">
                        <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
                            <div class="my-account">

                                <!--page-title--> 
                                <!-- BEGIN DASHBOARD-->
                                <div class="dashboard">
                                    <div class="welcome-msg">
                                        <p class="hello"><strong>Hola!</strong></p>
                                        <p>Para completar tu registro solo debes ingresar la información que se solicita.</p>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="content">
                                            <form class="form-horizontal" id="form-sign-up" novalidate>
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="email">Nombre<em class="required">*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="name"  value="" id="name" class="input-text required-entry validate-email" title="Name"
                                                                   required
                                                                   data-validation-required-message= "El nombre es requerido">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="email">Apellido<em class="required">*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="lastname" value="" id="lastname" class="input-text required-entry validate-email" title="Last Name" required
                                                                   data-validation-required-message= "El apellido es requerido">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="email">Correo Electronico<em class="required">*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="email" value="" id="email" class="input-text required-entry validate-email" title="Email Address" required
                                                                   data-validation-required-message= "El correro electronico es requerido">
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <label for="pass">Contraseña<em class="required">*</em></label>
                                                        <div class="input-box">
                                                            <input type="password" name="password" class="input-text required-entry validate-password" id="pass" title="Password" required
                                                                   data-validation-required-message="La contraseña es requerida">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="pass">Repite la contraseña<em class="required">*</em></label>
                                                        <div class="input-box">
                                                            <input type="password" name="repassword" class="input-text required-entry validate-password" id="pass2" title="Re Password" required
                                                                   data-validation-required-message= "La contraseña es requerida">
                                                        </div>
                                                    </li>

                                                </ul>


                                                <p class="required">* Campos Requeridos</p>



                                                <div class="buttons-set">
                                                    <button type="submit" class="button login" title="Sign-Up" name="send" id="send"><span>Crear Cuenta</span></button>
                                                </div> 
                                            </form>
                                        </div>



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

            {$footer}
            <!-- End For version 1,2,3,4,6 -->

        </div>
        <!--page-->
        <!-- Mobile Menu-->
        {$mobileMenu}
        <!-- JavaScript --> 
        <script src="../resources/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/modal/sweetalert.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/extensions/jquery.blockUI.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
        <script src="../resources/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>

        <script type="text/javascript" src="../resources/js/jquery.min.js"></script> 
        <script type="text/javascript" src="../resources/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../resources/js/parallax.js"></script> 
        <script type="text/javascript" src="../resources/js/revslider.js"></script> 
        <script type="text/javascript" src="../resources/js/common.js"></script> 
        <script type="text/javascript" src="../resources/js/jquery.bxslider.min.js"></script> 
        <script type="text/javascript" src="../resources/js/jquery.flexslider.js"></script> 
        <script type="text/javascript" src="../resources/js/owl.carousel.min.js"></script> 
        <script type="text/javascript" src="../resources/js/jquery.mobile-menu.min.js"></script>

        <!-- BEGIN VENDOR JS-->

        <script src="../global/js/global.js?vFin1" type="text/javascript"></script>
        <script src="js/signup.js?vFin1" type="text/javascript"></script>

    </body>
</html>
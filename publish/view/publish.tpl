<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>{$title}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{$appDescription}">
        <meta name="keywords" content="{$keywords}">
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
                                <h2>Crear anuncio</h2>
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
                                  
                                   
                                    
                                    <div class="recent-orders">
                                        <div class="title-buttons"> <strong>Datos Vehiculo</strong>  </div>
                                        <div class="table-responsive">


                                            


                                        </div>
                                        <!--table-responsive-->                 
                                    </div>
                                    
                                    <div class="recent-orders">
                                        <div class="title-buttons"> <strong>Ubicacion</strong>  </div>
                                        <div class="table-responsive">


                                            


                                        </div>
                                        <!--table-responsive-->                 
                                    </div>
                                    
                                     <div class="recent-orders">
                                        <div class="title-buttons"> <strong>Datos de contacto</strong>  </div>
                                        <div class="table-responsive">


                                            


                                        </div>
                                        <!--table-responsive-->                 
                                    </div>
                                    <!--recent-orders-->

                                </div>
                            </div>
                        </section>
                        <!--col-main col-sm-9 wow bounceInUp animated-->
                        <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
                            <a href="../posting/?car"> <button type="button" class="button " style="align-items: flex-end" title="create" name="send" id="send"><span>Crear Anuncio</span></button></a>
                            <a href="../posting/?auction"> <button type="button" class="button " style="align-items: flex-end" title="auction" name="send" id="send"><span>Crear Subasta</span></button></a>

                             <br> <br>
                            <div class="block block-account">
                                <div class="block-title"> Mi cuenta </div>
                                <div class="block-content">
                                    <ul>
                                        <li class="current"><a>Inicio</a></li>
                                        <li><a href="./?profile"><span> Mi Perfil</span></a></li>
                                        <li><a href="./?list"><span> Mis Anuncios</span></a></li>
                                        <li><a href="./?auction"><span> Mis Subastas</span></a></li>
                                        <li><a href="./?fav"><span> Mis favoritos</span></a></li>
                                    </ul>
                                </div>
                                <!--block-content--> 
                            </div>

                            <div class="block block-account">
                                <div class="block-title"> Administración </div>
                                <div class="block-content">
                                    <ul>
                                        <li><a href="#"><span> Mis usuarios</span></a></li>

                                    </ul>
                                </div>
                                <!--block-content--> 
                            </div>
                            <!--block block-account-->

                            {$sliderLateral}
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

        <!-- JavaScript --> 
        <script src="../resources/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/modal/sweetalert.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
        <script src="../resources/app-assets/vendors/js/extensions/jquery.blockUI.js" type="text/javascript"></script>

        <script type="text/javascript" src="../resources/js/jquery.min.js"></script> 
        <script type="text/javascript" src="../resources/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../resources/js/parallax.js"></script> 
        <script type="text/javascript" src="../resources/js/revslider.js"></script> 
        <script type="text/javascript" src="../resources/js/common.js"></script> 
        <script type="text/javascript" src="../resources/js/jquery.bxslider.min.js"></script> 
        <script type="text/javascript" src="../resources/js/jquery.flexslider.js"></script> 
        <script type="text/javascript" src="../resources/js/owl.carousel.min.js"></script> 
        <script type="text/javascript" src="../resources/js/jquery.mobile-menu.min.js"></script>

        <script src="../global/js/global.js?{$versionJs}" type="text/javascript"></script>
        <script src="js/dashboard.js?{$versionJs}" type="text/javascript"></script>
    </body>
</html>
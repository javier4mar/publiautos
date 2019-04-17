<?php
/* Smarty version 3.1.33, created on 2019-04-11 20:06:07
  from '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/login/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caff28fd2b794_05076105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f383a019c90f70213e4815aaba4450c4b10f17b' => 
    array (
      0 => '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/login/view/login.tpl',
      1 => 1555034764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caff28fd2b794_05076105 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Harrier Login Page</title>
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
                                <h2>Login or Create an Account</h2>
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

                        <form action="" method="post" id="login-form">
                            <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                            <fieldset class="col2-set">
                                <div class="col-1 new-users"> 
                                    <strong>New Customers</strong>    
                                    <div class="content">

                                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                        <div class="buttons-set">
                                            <button type="button" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 registered-users">
                                    <strong>Registered Customers</strong>             
                                    <div class="content">

                                        <p>If you have an account with us, please log in.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label for="email">Email Address<em class="required">*</em></label>
                                                <div class="input-box">
                                                    <input type="text" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email Address">
                                                </div>
                                            </li>
                                            <li>
                                                <label for="pass">Password<em class="required">*</em></label>
                                                <div class="input-box">
                                                    <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="remember-me-popup">
                                            <div class="remember-me-popup-head" style="display:none">
                                                <h3 id="text2">What's this?</h3>
                                                <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                                            </div>
                                            <div class="remember-me-popup-body" style="display:none">
                                                <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
                                                <div class="remember-me-popup-close-button a-right">
                                                    <a href="#" class="remember-me-popup-close button" title="Close" onClick="
                    showDiv()"><span>Close</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="required">* Required Fields</p>



                                        <div class="buttons-set">

                                            <button type="submit" class="button login" title="Login" name="send" id="send2"><span>Login</span></button>

                                            <a href="#" class="forgot-word">Forgot Your Password?</a>
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
        <!-- Mobile Menu-->
        <div id="mobile-menu">
            <ul>
                <li>
                    <div class="mm-search">
                        <form id="search1" name="search">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                                </div>
                                <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
                            </div>
                        </form>
                    </div>
                </li>
                <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
                <li><a href="grid1.html">Accessories</a>
                    <!--mega menu-->
                    <ul class="level0">
                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Audio</span></a> 
                            <!--sub sub category-->
                            <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Amplifiers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Installation Parts</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Stereos</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Subwoofers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                            </ul>
                            <!--level1--> 
                            <!--sub sub category--> 
                        </li>
                        <!--level3 nav-6-1 parent item-->
                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Body Parts</span></a> 
                            <!--sub sub category-->
                            <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bumpers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Doors</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fenders</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilles</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hoods</span></a> </li>
                                <!--level2 nav-6-1-1-->
                            </ul>
                            <!--level1--> 
                            <!--sub sub category--> 
                        </li>
                        <!--level3 nav-6-1 parent item-->
                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Exterior</span></a> 
                            <!--sub sub category-->
                            <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bed Accessories</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Body Kits</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Grilles</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Car Covers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Bumpers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                            </ul>
                            <!--level1--> 
                            <!--sub sub category--> 
                        </li>
                        <!--level3 nav-6-1 parent item-->
                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Interior</span></a> 
                            <!--sub sub category-->
                            <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Gauges</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dash Kits</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Seat Covers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Steering Wheels</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sun Shades</span></a> </li>
                                <!--level2 nav-6-1-1-->
                            </ul>
                            <!--level1--> 
                            <!--sub sub category--> 
                        </li>
                        <!--level3 nav-6-1 parent item-->
                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Lighting</span></a> 
                            <!--sub sub category-->
                            <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fog Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Headlights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>LED Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Signal Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                            </ul>
                            <!--level1--> 
                            <!--sub sub category--> 
                        </li>
                        <!--level3 nav-6-1 parent item-->
                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Performance</span></a> 
                            <!--sub sub category-->
                            <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Air Intake Systems</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Brakes</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Exhaust Systems</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Power Adders</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racing Gear</span></a> </li>
                                <!--level2 nav-6-1-1-->
                            </ul>
                            <!--level1--> 
                            <!--sub sub category--> 
                        </li>
                        <!--level3 nav-6-1 parent item-->
                    </ul>
                    <!--level0--> 
                </li>
                <li><a href="#">Listing‎</a>
                    <ul class="level1">
                        <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>Car List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="grid1.html"> <span>Accessories Grid</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="list1.html"> <span>Accessories List</span> </a> </li>
                        <li class="level1 first parent"><a href="car-detail.html"><span>Car Detail</span></a> </li>
                        <li class="level1 first parent"><a href="accessories-detail.html"><span>Accessories Detail</span></a> </li>
                    </ul>
                </li>
                <li><a href="grid.html">Blog</a>
                    <ul class="level1">
                        <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                        <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                    </ul>
                </li>
                <li><a href="compare.html">Sandwiches‎</a></li>
                <li><a href="#">Pages</a>
                    <ul class="level1">
                        <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                        <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                            <!--sub sub category-->
                            <ul class="level2 right-sub">
                                <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                                <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                            </ul>
                            <!--sub sub category--> 
                        </li>
                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                        <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                        <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                        <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                        <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                        <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                    </ul>
                </li>
                <li><a href="#">Custom</a></li>
            </ul>
        </div>
        <!-- JavaScript --> 
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


    </body></html><?php }
}

<?php
/* Smarty version 3.1.33, created on 2019-04-14 17:10:02
  from '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/dashboard/view/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb3bdca725570_46263195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9e49ed4b460e90c16e2f77b1ef4e49dd78263e' => 
    array (
      0 => '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/dashboard/view/dashboard.tpl',
      1 => 1555283387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb3bdca725570_46263195 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
</head>
<body>
<div id="page">
  
    <?php echo $_smarty_tpl->tpl_vars['headerLong']->value;?>

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>Dashboard</h2>
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
                <p class="hello"><strong>Hello, john doe!</strong></p>
                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
              </div>
              <div class="recent-orders">
                <div class="title-buttons"> <strong>Recent Orders</strong> <a href="#">View All</a> </div>
                <div class="table-responsive">
                  <table class="data-table table-striped" id="my-orders-table">
                    <colgroup>
                    <col width="">
                    <col width="">
                    <col>
                    <col width="1">
                    <col width="1">
                    <col width="20%">
                    </colgroup>
                    <thead>
                      <tr class="first last">
                        <th>Order # </th>
                        <th>Date</th>
                        <th>Ship To</th>
                        <th><span class="nobr">Order Total</span></th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="first odd">
                        <td>12800000002</td>
                        <td><span class="nobr">5/12/2015</span></td>
                        <td>jhon doe</td>
                        <td><span class="price">$403.00</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> </span></td>
                      </tr>
                      <tr class="even">
                        <td>12800000001</td>
                        <td><span class="nobr">5/11/2015</span></td>
                        <td>jhon doe</td>
                        <td><span class="price">$506.50</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#" class="link-reorder">Reorder</a> </span></td>
                      </tr>
                      <tr class="odd">
                        <td>13100000001</td>
                        <td><span class="nobr">5/9/2015</span></td>
                        <td>jhon doe</td>
                        <td><span class="price">$997.84</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#" class="link-reorder">Reorder</a> </span></td>
                      </tr>
                      <tr class="even">
                        <td>12000000002</td>
                        <td><span class="nobr">4/1/2015</span></td>
                        <td>jhon doe</td>
                        <td><span class="price">$60.00</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#" class="link-reorder">Reorder</a> </span></td>
                      </tr>
                      <tr class="last odd">
                        <td>12000000001</td>
                        <td><span class="nobr">4/1/2015</span></td>
                        <td>jhon doe</td>
                        <td><span class="price">$208.00</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#" class="link-reorder">Reorder</a> </span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--table-responsive-->                 
              </div>
              <!--recent-orders-->
              <div class="box-account">
                <div class="page-title">
                  <h2>Account Information</h2>
                </div>
                <div class="col2-set">
                  <div class="col-1">
                    <div class="box">
                      <div class="box-title">
                        <h5>Contact Information</h5>
                        <a href="#">Edit</a> </div>
                      <!--box-title-->
                      <div class="box-content">
                        <p> jhon doe<br>
                          jhon.doe@gmail.com<br>
                          <a href="#">Change Password</a> </p>
                      </div>
                      <!--box-content--> 
                    </div>
                    <!--box--> 
                  </div>
                  <div class="col-2">
                    <div class="box">
                      <div class="box-title">
                        <h5>Newsletters</h5>
                        <a href="#">Edit</a> </div>
                      <!--box-title-->
                      <div class="box-content">
                        <p> You are currently not subscribed to any newsletter. </p>
                      </div>
                      <!--box-content--> 
                    </div>
                    <!--box--> 
                  </div>
                </div>
                <div class="col2-set">
                  <div class="box">
                    <div class="box-title">
                      <h4>Address Book</h4>
                      <a href="#">Manage Addresses</a> </div>
                    <!--box-title-->
                    <div class="box-content">
                      <div class="col-1">
                        <h5>Default Billing Address</h5>
                        <address>
                        jhon doe<br>
                        Street road<br>
                        AL,  Alabama, 42136<br>
                        United States<br>
                        T: 4563 <br>
                        <a href="#">Edit Address</a>
                        </address>
                      </div>
                      <div class="col-2">
                        <h5>Default Shipping Address</h5>
                        <address>
                        jhon doe<br>
                        Street road<br>
                        AL,  Alabama, 42136<br>
                        United States<br>
                        T: 4563 <br>
                        <a href="#">Edit Address</a>
                        </address>
                      </div>
                    </div>
                    <!--box-content--> 
                  </div>
                  <!--box--> 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--col-main col-sm-9 wow bounceInUp animated-->
        <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="block block-account">
            <div class="block-title"> My Account </div>
            <div class="block-content">
              <ul>
                <li class="current"><a>Account Dashboard</a></li>
                <li><a href="#"><span> Account Information</span></a></li>
                <li><a href="#"><span> Address Book</span></a></li>
                <li><a href="#"><span> My Orders</span></a></li>
                <li><a href="#"><span> Billing Agreements</span></a></li>
                <li><a href="#"><span> Recurring Profiles</span></a></li>
                <li><a href="#"><span> My Product Reviews</span></a></li>
                <li><a href="#"><span> My Wishlist</span></a></li>
                <li><a href="#"><span> My Applications</span></a></li>
                <li><a href="#"><span> Newsletter Subscriptions</span></a></li>
                <li class="last"><a href="#"><span> My Downloadable Products</span></a></li>
              </ul>
            </div>
            <!--block-content--> 
          </div>
          <!--block block-account-->
          
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


</body>
</html><?php }
}

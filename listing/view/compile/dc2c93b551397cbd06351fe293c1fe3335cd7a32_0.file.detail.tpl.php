<?php
/* Smarty version 3.1.33, created on 2019-04-11 20:43:26
  from '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/listing/view/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caffb4e6ad0d9_13732902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc2c93b551397cbd06351fe293c1fe3335cd7a32' => 
    array (
      0 => '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/listing/view/detail.tpl',
      1 => 1555036988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caffb4e6ad0d9_13732902 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Harrier Car Detail Page</title>
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
 <?php echo $_smarty_tpl->tpl_vars['headerMenuMini']->value;?>

  <div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
              <li class="category1599"> <a href="grid.html" title="">New Car</a> <span>&rsaquo; </span> </li>
              <li class="category1600"> <a href="grid.html" title="">Audi</a> <span>&rsaquo; </span> </li>
              <li class="category1601"> <strong>Sedans</strong> </li>
            </ul>
          </div>
          <!--col-xs-12--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <div class="page-title">
      <h2>PRODUCT Detail</h2>
    </div>
  </div>
  <!-- BEGIN Main Container -->
  <div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
      <div class="col-main"> 
        <!-- Endif Next Previous Product -->
        <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product" itemid="#product_base">
          <div id="messages_product_view"></div>
          <!--product-next-prev-->
          <div class="product-essential container">
            <div class="row">
              <form action="#" method="post" id="product_addtocart_form">
                <!--End For version 1, 2, 6 --> 
                <!-- For version 3 -->
                <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                  <div class="new-label new-top-left">Hot</div>
                  <div class="sale-label sale-top-left">-15%</div>
                  <div class="product-image">
                    <div class="product-full"> <img id="product-zoom1" src="products-images/p46.jpg" data-zoom-image="products-images/p46.jpg" alt="product-image"/> </div>
                    <div class="more-views">
                      <div class="slider-items-products">
                        <div id="gallery_02" class="product-flexslider hidden-buttons product-img-thumb">
                          <div class="slider-items slider-width-col4 block-content">
                            <div class="more-views-items"> <a href="#" data-image="products-images/p1.jpg" data-zoom-image="products-images/p1.jpg"> <img id="product-zoom0"  src="products-images/p1.jpg" alt="product-image"/> </a></div>
                            <div class="more-views-items"> <a href="#" data-image="products-images/p2.jpg" data-zoom-image="products-images/p2.jpg"> <img id="product-zoom1"  src="products-images/p2.jpg" alt="product-image"/> </a></div>
                            <div class="more-views-items"> <a href="#" data-image="products-images/p3.jpg" data-zoom-image="products-images/p3.jpg"> <img id="product-zoom2"  src="products-images/p3.jpg" alt="product-image"/> </a></div>
                            <div class="more-views-items"> <a href="#" data-image="products-images/p4.jpg" data-zoom-image="products-images/p4.jpg"> <img id="product-zoom3"  src="products-images/p4.jpg" alt="product-image"/> </a> </div>
                            <div class="more-views-items"> <a href="#" data-image="products-images/p5.jpg" data-zoom-image="products-images/p5.jpg"> <img id="product-zoom4"  src="products-images/p5.jpg" alt="product-image" /> </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end: more-images --> 
                   <div class="toll-free"><a href="#"><i class="fa fa-phone"></i> +1 800 789 0000</a></div>
                  <div class="ask-question"><a href="#" onClick="ShowMe();"><i class="fa fa-question"></i> Ask a Question</a></div>
                  <div class="request-call"><a href="#" onClick="ShowMe1();"><i class="fa fa-money"></i> Finance Calculator</a></div>
                </div>
                <!--End For version 1,2,6--> 
                <!-- For version 3 -->
                <div class="product-shop col-lg- col-sm-7 col-xs-12">
                  <div class="brand">XPERIA</div>
                  <div class="product-name">
                    <h1>Gorgeous Mercedes-Benz E-Class All-Terrain Luxury </h1>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#">1 Review</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                  </div>
                  <div class="price-block">
                    <div class="price-box">
                     
                      <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price">$70,000.00 - $90,000.00 </span> </p>
                    </div>
                  </div>
                 
                  <div class="spec-row" id="summarySpecs">
                  <h2>Specifications</h2>
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td class="label-spec"> Mileage <span class="coln">:</span></td>
                          <td class="value-spec"> 17 kmpl </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                          <td class="value-spec"> 259kw </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Transmission <span class="coln">:</span></td>
                          <td class="value-spec"> Automatic </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                          <td class="value-spec"> Diesel </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Model <span class="coln">:</span></td>
                          <td class="value-spec"> 2019 </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Airbags <span class="coln">:</span></td>
                          <td class="value-spec"> Available </td>
                        </tr>
                         <tr class="odd">
                          <td class="label-spec"> ABS <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Fog Lamps <span class="coln">:</span></td>
                          <td class="value-spec"> Front </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="email-addto-box">
                    <ul class="add-to-links">
                      <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                      <li><a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                    </ul>
                    <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                  </div>
                  <div class="social">
                    <ul class="link">
                      <li class="fb"><a href="#"></a></li>
                      <li class="tw"><a href="#"></a></li>
                      <li class="googleplus"><a href="#"></a></li>
                      <li class="rss"><a href="#"></a></li>
                      <li class="pintrest"><a href="#"></a></li>
                      <li class="linkedin"><a href="#"></a></li>
                      <li class="youtube"><a href="#"></a></li>
                    </ul>
                  </div>
                  <ul class="shipping-pro">
                    <li>Free Servicing</li>
                    <li>Free Monthly Checkup</li>
                    <li>Extended Warrenty</li>
                  </ul>
                </div>
                <!--product-shop--> 
                <!--Detail page static block for version 3-->
              </form>
            </div>
          </div>
          <!--product-essential-->
          <div class="product-collateral container">
            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
              <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Vehicle Overview </a> </li>
              <li><a href="#product_tabs_tags" data-toggle="tab">Technical Specification</a></li>
             <li> <a href="#product_tabs_custom" data-toggle="tab">Accessories</a> </li>
               <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
              <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="product_tabs_description">
                <div class="std">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                  <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_tags">
                <div class="spec-row" id="summarySpecs">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td class="label-spec"> Mileage <span class="coln">:</span></td>
                          <td class="value-spec"> 17 kmpl </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                          <td class="value-spec"> 259kw </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Transmission <span class="coln">:</span></td>
                          <td class="value-spec"> Automatic </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                          <td class="value-spec"> Diesel </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Model <span class="coln">:</span></td>
                          <td class="value-spec"> 2019 </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Airbags <span class="coln">:</span></td>
                          <td class="value-spec"> Available </td>
                        </tr>
                         <tr class="odd">
                          <td class="label-spec"> ABS <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Fog Lamps <span class="coln">:</span></td>
                          <td class="value-spec"> Front </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="reviews_tabs">
                <div class="woocommerce-Reviews">
                  <div>
                    <h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
                    <ol class="commentlist">
                      <li class="comment">
                        <div> <img alt="" src="images/member1.png" class="avatar avatar-60 photo">
                          <div class="comment-text">
                            <div class="ratings">
                              <div class="rating-box">
                                <div style="width:100%" class="rating"></div>
                              </div>
                            </div>
                            <p class="meta"> <strong>John Doe</strong> <span>–</span> April 19, 2018 </p>
                            <div class="description">
                              <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- #comment-## -->
                      <li class="comment">
                        <div> <img alt="" src="images/member2.png" class="avatar avatar-60 photo">
                          <div class="comment-text">
                            <div class="ratings">
                              <div class="rating-box">
                                <div style="width:100%" class="rating"></div>
                              </div>
                            </div>
                            <p class="meta"> <strong>Stephen Smith</strong> <span>–</span> June 02, 2018 </p>
                            <div class="description">
                              <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- #comment-## -->
                    </ol>
                  </div>
                  <div>
                    <div>
                      <div class="comment-respond"> <span class="comment-reply-title">Add a review </span>
                        <form action="#" method="post" class="comment-form" novalidate>
                          <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                          <div class="comment-form-rating">
                            <label id="rating">Your rating</label>
                            <p class="stars"> <span> <a class="star-1" href="#">1</a> <a class="star-2" href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4" href="#">4</a> <a class="star-5" href="#">5</a> </span> </p>
                          </div>
                          <p class="comment-form-comment">
                            <label>Your review <span class="required">*</span></label>
                            <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                          </p>
                          <p class="comment-form-author">
                            <label for="author">Name <span class="required">*</span></label>
                            <input id="author" name="author" type="text" value="" size="30" required>
                          </p>
                          <p class="comment-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input id="email" name="email" type="email" value="" size="30" required>
                          </p>
                          <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                          </p>
                        </form>
                      </div>
                      <!-- #respond --> 
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom">
                <div class="spec-row" id="summarySpecs">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td class="label-spec"> Air Conditioner <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> AntiLock Braking System <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Power Steering <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> CD Player <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Leather Seats <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                         <tr class="odd">
                          <td class="label-spec"> Power Door Locks <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Brake Assist <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Driver Airbag <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom1">
                <div class="product-tabs-content-inner clearfix">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                </div>
              </div>
            </div>
          </div>
          
          <!--product-collateral-->
          <div class="box-additional"> 
            <!-- BEGIN RELATED PRODUCTS -->
            <div class="related-pro container">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Related Products</h2>
                </div>
                <div id="related-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p36.jpg" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">Used</div>
                            <div class="sale-label sale-top-left">-15%</div>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                              </div>
                              <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p35.jpg" alt="Retis lapen casen"></a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                              </div>
                              <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item --> 
                    
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p34.jpg" alt="Retis lapen casen"></a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                              </div>
                              <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p33.jpg" alt="Retis lapen casen"></a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                              </div>
                              <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p31.jpg" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">New</div>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                              </div>
                              <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item --> 
                    
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p32.jpg" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">New</div>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                              </div>
                              <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item --> 
                  </div>
                </div>
              </div>
            </div>
            <!-- end related product --> 
            
          </div>
          <!-- end related product --> 
        </div>
        <!--box-additional--> 
        <!--product-view--> 
      </div>
    </div>
    <!--col-main--> 
  </div>
  <!--main-container--> 
</div>
<!--col1-layout--> 

<!-- For version 1,2,3,4,6 -->
 <footer> 
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
      <div class="our-features-box wow bounceInUp animated animated">
        <div class="container">
          <ul>
            <li>
              <div class="feature-box">
                <div class="icon-truck"><img src="images/world-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>World's #1</h6>
                  <p>Largest Auto portal</p>
                </div>
              </div>
            </li>
            <li>
              <div class="feature-box">
                <div class="icon-support"><img src="images/car-sold-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Car Sold</h6>
                  <p>Every 4 minute</p>
                </div>
              </div>
            </li>
            <li>
              <div class="feature-box">
                <div class="icon-money"><img src="images/tag-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Offers</h6>
                  <p>Stay updated pay less</p>
                </div>
              </div>
            </li>
            <li class="last">
              <div class="feature-box">
                <div class="icon-return"><img src="images/compare-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Compare</h6>
                  <p>Decode the right car</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="newsletter-row">
        <div class="container">
          <div class="row"> 
            
            <!-- Footer Newsletter -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
              <div class="newsletter-wrap">
                <h5>Newsletter</h5>
                <h4>Get Notified Of any Updates!</h4>
                <form action="#" method="post" id="newsletter-validate-detail1">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                      <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                    </div>
                    <!--container_form_news2--> 
                  </div>
                  <!--container_form_news-->
                </form>
              </div>
              <!--newsletter-wrap--> 
            </div>
          </div>
        </div>
        <!--footer-column-last--> 
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 col-lg-4">
            <div class="co-info">
              <h4>SHOWROOM</h4>
              <address>
              <div><span>ThemesGround, 789 Main rd, Anytown, <br>
                CA 12345 USA</span></div>
              <div> <span> +1 800 789 0000</span></div>
              <div> <span><a href="#">Harrier@themesground.com</a></span></div>
              <div> <span>Mon - Fri : 09am to 06pm</span></div>
              </address>
            </div>
          </div>
          <div class="col-sm-8 col-xs-12 col-lg-8">
            <div class="footer-column">
              <h4>Quick Links</h4>
              <ul class="links">
                <li class="first"><a title="How to buy" href="/blog/">Blog</a></li>
                <li><a title="FAQs" href="#">FAQs</a></li>
                <li><a title="Payment" href="#">Payment</a></li>
                <li><a title="Shipment" href="#">Shipment</a></li>
                <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                <li class="last"><a title="Return policy" href="#">Return policy</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                <li><a title="Information" href="#">Information</a></li>
                <li><a title="Addresses" href="#">Addresses</a></li>
                <li><a title="Addresses" href="#">Discount</a></li>
                <li><a title="Orders History" href="#">Orders History</a></li>
                <li class="last"><a title=" Additional Information" href="#"> Additional Information</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Information</h4>
              <ul class="links">
                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                <li><a title="Search Terms" href="#">Search Terms</a></li>
                <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                <li><a title="History" href="#">About Us</a></li>
                <li><a title="History" href="#">Contact Us</a></li>
                <li><a title="Suppliers" href="#">Suppliers</a></li>
              </ul>
            </div>
          </div>
          
          <!--col-sm-12 col-xs-12 col-lg-8--> 
          <!--col-xs-12 col-lg-4--> 
        </div>
        <!--row--> 
        
      </div>
      
      <!--container--> 
    </div>
    <!--footer-inner-->
    
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 coppyright">&copy; 2019 ThemesGround. All Rights Reserved. </div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BEGIN SIMPLE FOOTER --> 
  </footer>
<!-- End For version 1,2,3,4,6 -->

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

<div class="popup2" style="display: none;">
<div class="ask-question-block">
<h3>Ask a Question</h3>
<div class="form-inner"><img src="images/close-icon.png" alt="close" class="x" onClick="HideMe1();">
<div class="form-block"><label>Name</label>
<input name="" type="text">
</div>
<div class="form-block"><label>Email</label>
<input name="" type="text">
</div>
<div class="form-block"><label>Phone</label>
<input name="" type="text">
</div>
<div class="form-block"><label>Question</label>
<input name="" type="text">
</div>
<div class="form-block">
 <button type="submit" title="submit" class="button"><span>Submit</span></button>
</div>
</div>
</div>
</div>

<div class="popup3" style="display: none;">
<div class="ask-question-block">
<h3>Finance Calculator</h3>
<div class="form-inner"><img src="images/close-icon.png" alt="close" class="x" onClick="HideMe2();">
<div class="form-block"><label>Vehicle Price ($)</label>
<input name="" type="text" value="87,000">
</div>
<div class="form-block"><label>Down Payment</label>
<input name="" type="text"  value="25,000">
</div>
<div class="form-block"><label>Interest Rate</label>
<input name="" type="text"  value="13%">
</div>
<div class="form-block"><label>Period in Years</label>
<input name="" type="text"  value="3 years">
</div>
<div class="form-block">
 <button type="submit" title="submit" class="button"><span>Calculate</span></button>
</div>
</div>
</div>
</div>

<div id="fade"></div>

<!-- JavaScript --> 
<?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../resources/js/bootstrap-slider.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../resources/js/bootstrap-select.min.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="../resources/js/owl.carousel.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../resources/js/cloud-zoom.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="../resources/js/jquery.mobile-menu.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
	
		
    }
	function ShowMe()
    {
        jQuery('.popup2').show();
        jQuery('#fade').show();
		
    }
		function ShowMe1()
    {
        jQuery('.popup3').show();
        jQuery('#fade').show();
		
    }
	function HideMe1()
    {
        jQuery('.popup2').hide();
        jQuery('#fade').hide();

		
    }
	
		function HideMe2()
    {
        jQuery('.popup3').hide();
        jQuery('#fade').hide();

		
    }
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

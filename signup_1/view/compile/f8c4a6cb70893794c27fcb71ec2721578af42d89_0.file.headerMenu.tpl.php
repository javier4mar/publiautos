<?php
/* Smarty version 3.1.33, created on 2019-04-14 23:27:17
  from '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/global/view/headerMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb41635174d13_63314319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c4a6cb70893794c27fcb71ec2721578af42d89' => 
    array (
      0 => '/Users/javierhernandez/Documents/Proyectos Web/Publiautos/global/view/headerMenu.tpl',
      1 => 1555306016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb41635174d13_63314319 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="../" title="<?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
" class="logo">
              <div><img src="../resources/images/logo/publiAutosLogo.png" alt="<?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
"  style="height-max:176px "></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <?php echo $_smarty_tpl->tpl_vars['slideHeaderBanner']->value;?>

                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i> +1 800 789 0000</div>
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  <div class="no-js"> <a title="" class="clicker"></a>
                    <div class="fl-nav-links">
                      <div class="language-currency">
                        <div class="fl-language">
                        <h3>Pais</h3>
                          <ul class="lang">
                            <li><a href="./"> <img src="../resources/images/page/costa-rica.png" height="30px" alt="Costa-Rica"> <span>Costa Rica</span> </a></li>
                          </ul>
                        </div>
                        
                      </div>
                       <h3>Mi Cuenta</h3>
                      <ul class="links">
                        <li><a href="../login/" title="Mi Cuenta">Ingresar</a></li>
                        <li><a href="../login/" title="Registrarme">Registrarme</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="collapse navbar-collapse">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar">
                      <span class="input-group-btn">
                      <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                      </span> </div>
                  </form>
                </div>
                <!--links--> 
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner"> 
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="../home/"><span>Inicio</span></a></li>
                      <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Autos Usados</span> </a>
                        <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                          <div class="container">
                            <div class="header-nav-dropdown-wrapper clearer">
                              <div class="grid12-3">
                                <div><img src="../resources/images/custom-img1.jpg" alt="custom-image"></div>
                                <h4 class="heading">Cuanto cuesta mi carro</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="../resources/images/custom-img2.jpg" alt="custom-image"></div>
                                <h4 class="heading">Subastas</h4>
                                <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="../resources/images/custom-img3.jpg" alt="custom-image"></div>
                                <h4 class="heading">Ofertas</h4>
                                <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="../resources/images/custom-img4.jpg" alt="custom-image"></div>
                                <h4 class="heading">Reviews de carros</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="mega-menu hidden-sm"> <a class="level-top" href="../auction/"><span>Subastas</span></a> </li>
                      
                      <li class="mega-menu hidden-sm"> <a class="level-top" href="../compare/"><span>Comparador</span></a> </li>
                     
          
                    </ul>
                    <!--nav--> 
                  </div>
                </nav>
              </div>
            </div>
            
            <!--row--> 
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--container--><?php }
}

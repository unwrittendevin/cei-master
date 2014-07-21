<div class="container" id="wrapper">
<header class="banner" role="banner">
  <div class="row" id="branding">
    <div class="col-sm-7 col-sm-push-5 col-xs-12" id="utility">
      <div class="row">
        <div class="col-xs-7">
          <ul class="social-nav">
            <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
          </ul>
        </div>
        <div class="col-xs-5">
        <?php get_search_form(); ?>
        </div>
      </div>
    </div>
    <div class="col-sm-5 col-sm-pull-7 col-xs-8" id="logo"> <a href="<?php echo esc_url(home_url('/')); ?>/">
      <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/cei-logo.png" alt="<?php bloginfo( 'name' ); ?>" />
      </a> </div>
  </div>
  <div class="row" id="main-nav">
  <div class="left-banner hidden-xs"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/banner-left.png" alt="banner corner" /></div>
    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <nav class="collapse navbar-collapse" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      </nav>
    </div><div class="right-banner hidden-xs"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/banner-right.png" alt="banner corner" /></div>
  </div>
</header>

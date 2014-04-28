<?php if(is_front_page()): ?>

<div class="container">
  <div class="logo-area row">
    <div class="col-sm-3">
      <a class="brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mazeppalogo-white-400px.png" alt="mazeppalogo-white" /></a>
    </div>
    <div class="col-sm-9 social-buttons">
	  <span class="pull-right">
	    <a href="https://www.facebook.com/mazeppaprod"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
      </span></a>
      <a href="https://twitter.com/mazeppaprod"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
		  <a href="http://instagram.com/mazeppaprod"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
		  
	  </span>
    </div>
  </div>
</div>

<header class="banner navbar navbar-default container" role="banner">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
</header>

<div class="home-carousel container">

  <?php 
  /*
  *  Create the Markup for a slider
  *  This example will create the Markup for Flexslider (http://www.woothemes.com/flexslider/)
  */
 
  $images = get_field('homepage_gallery');
 
  if( $images ): $i = 0;?>
    <div id="homepage-carousel" class="carousel slide row" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php foreach( $images as $image ): ?>
        <div class="item <?php if($i == 0){ echo 'active'; }?>">
          <img src="<?php echo $image['sizes']['homepage-scroller']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <?php $i++; endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
</div>


<?php else: ?>

<header class="banner navbar navbar-inverse inner-page" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if(is_singular('productions')): ?>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mazeppalogo-white-400px.png" /></a>
      <?php else: ?>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mazeppalogo-400px.png" /></a>
      <?php endif; ?>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

<?php endif; ?>
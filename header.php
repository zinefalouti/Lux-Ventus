<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importing Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <!-- Importing main style -->
    <link rel="stylesheet" href="<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>"/>
    
    <!-- Importing Bootstrap 4 -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css"/>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

    
    <?php wp_head(); ?>

    <!-- Importing the Animate CSS library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    
    <!-- Importing the Owl CSS and JS Classes -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css"/>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
    
    

    <!-- Importing the Lux Ventus JS -->
    <script src="<?php bloginfo('template_url'); ?>/js/global.js"></script>


    <!-- Setting up the title of each page -->
    <title><?php echo get_bloginfo(); ?> | <?php echo the_title(); ?></title>

    <!-- Fetch the uploaded site icon and turn it into a favicon -->
    <link rel="icon" type="image/x-icon" href="<?php get_site_icon_url(); ?>">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-8 animate__animated animate__pulse">
            
            <?php
                $header_image = get_theme_mod( 'header_image' );
                if ( $header_image ) :
            ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_image ); ?>" alt="Logo" class="logo"/></a>
            <?php else : ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/luxventus-logo.png" class="logo" alt="logo"/></a>
            <?php endif; ?>


        </div>
        <div class="col-lg-9 navbar d-none d-lg-flex animate__animated animate__pulse">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

            <button onClick="location.href='<?php echo get_theme_mod( 'link_url' ); ?>'" type="button">Contact Us</button>
            <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="<?php bloginfo('template_url'); ?>/img/search-icon.png" class="iconbtn"/></a>
        </div>


        <!-- Hamburger! Appears only on mobile view -->
        <div class="col-4 d-lg-none Hamburger">
            <a href="#" data-toggle="modal" data-target="#menu"><img src="<?php bloginfo('template_url'); ?>/img/hamburger.png" class="iconbtn"/></a>
        </div>

    </div>
</div>    





<!-- Search Modal Area Desktop Mode -->

<div class="searchModal modal animate__animated animate__rubberBand animate__delay-0.5s" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="container">
     <div class="row">
        <div class="col-lg-10">
           <h1 class="">Looking for a specific article?</h1>
        </div>
        <div class="col-lg-2">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
            <img src="<?php bloginfo('template_url'); ?>/img/close-icon.png" class="iconbtn  animate__rubberBand"/>
            </a>
        </div>
     </div>
     <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
     <div class="row search">
        <div class="col-lg-10">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Article title, topic or category', 'textdomain' ); ?>" />
        </div>
        <div class="col-lg-2">
        <button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'textdomain' ); ?></button>
        </div>
     </div>
     </form>
  </div>
</div>


<!-- Hamburger Open Menu -->

<div class="MobileMenu modal animate__animated animate__bounceInRight animate__delay-0.5s" id="menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="container">
     <div class="row">
        <div class="col-12 col-sm-12">

          <div class="menuclose">
              <a href="#" class="close" data-dismiss="modal" aria-label="Close">
              <img src="<?php bloginfo('template_url'); ?>/img/close-icon.png" class="iconbtn"/>
              </a>
          </div> 
          
          <div class="UpMarginator"><a href="<?php echo home_url(); ?>">Home</a></div>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          <div class="DownMarginator"><a href="<?php echo get_theme_mod( 'link_url' ); ?>">Contact Us</a></div>

          <hr/>

            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
               <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Article title, topic or category', 'textdomain' ); ?>" />
               <button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'textdomain' ); ?></button>
            </form>

        </div>
     </div>
  </div>
</div>







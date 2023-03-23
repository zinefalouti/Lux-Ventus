
<!-- Footer Area Starts Here -->

<div class="footer-wrap">
    <div class="container">
        <div class="row">
            <!-- Footer Logo Area -->
            <div class="col-lg-3 col-12">
                <?php
                    $header_image = get_theme_mod( 'header_image' );
                    if ( $header_image ) :
                ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_image ); ?>" alt="Logo" class="logo"/></a>
                <?php else : ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/luxventus-logo.png" class="logo" alt="logo"/></a>
                <?php endif; ?>
            </div>

            <!-- Right Area for social links -->
            <div class="col-lg-9 col-12">
               <?php get_sidebar('footer'); ?>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <hr/>
                <span>© 2023 - Lux Ventus by Zine.E.Falouti</span>
            </div>
        </div>
    </div>
</div>


</body>
</html>
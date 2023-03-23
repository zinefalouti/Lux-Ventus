<?php

function theme_customizer_register( $wp_customize ) {

    // I have added a customizeable logo section with this fucntions
    $wp_customize->add_section( 'header_image_section' , array(
        'title'      => __( 'Logo', 'theme' ),
        'priority'   => 30,
    ) );

    // Add logo control
    $wp_customize->add_setting( 'header_image', array(
        'default' => get_template_directory_uri() . '/img/luxventus-logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_image', array(
        'label'    => __( 'Logo', 'theme' ),
        'section'  => 'header_image_section',
        'settings' => 'header_image',
    ) ) );

    // Making the Contact Us button customizable in the Dashboard //
    $wp_customize->add_section( 'link_section' , array(
        'title'      => __( 'Contact Us Button Link', 'theme' ),
        'priority'   => 30,
    ) );

    // Add link control
    $wp_customize->add_setting( 'link_url' );
    $wp_customize->add_control( 'link_url', array(
        'label'    => __( 'Contact Us Button Link. (Please put the full url starting by https://www)', 'theme' ),
        'section'  => 'link_section',
        'type'     => 'text',
    ) );



}

add_action( 'customize_register', 'theme_customizer_register' );



?>


<?php
// I'm registering the main menu

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );


?>

<?php

// Enabling the Featured Image in Posts //
add_theme_support( 'post-thumbnails' );

?>


<?php
// Registering the main Sidebar


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'Lux Ventus Main Sidebar' ),
			'before_widget' => '<div id="%1$s lux-widget" class="lux-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
            'class' => 'lux-widget',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

?>


<?php
// Registering the main Sidebar


add_action( 'widgets_init', 'my_register_sidebars2' );
function my_register_sidebars2() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer',
			'name'          => __( 'Footer Sidebar' ),
			'description'   => __( 'Lux Ventus Footer Sidebar' ),
			'before_widget' => '<div id="%1$s" class="footer-social %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
            'class' => 'lux-widget',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

?>




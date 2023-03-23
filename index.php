<?php
/**
 * The main template file
 *
 *This is the Lux Ventus WP blog theme
 *
 * @link https://griidtech.com/
 *
 * @package WordPress
 * @subpackage Lux Ventus
 * @since Version 1.0
 */

 ?>

<?php get_header(); ?>

<!-- Hero BG area for the dynamic index page -->



<!-- Javscript for the Typing Effect on the Hero Title -->
<script>

var string = "<?php the_field('hero_title_highlight'); ?>";
var str = string.split("");
var el = document.getElementById('typing');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
var running = setTimeout(animate, 90);
})();

</script>



<!-- The Latests Posts and Sidebar loop Start here -->

<div class="container d-index-wrapper">
   <div class="row">
      <!-- Left Wing (Posts Loop) -->
      <div class="col-lg-9 col-12 h-100">
         <?php require get_template_directory() . '/components/post-all-loop.php';?>
      </div>
      
      <!-- Right Wing (Sidebar) -->
      <div class="col-lg-3 d-lg-block d-none col-12">
        <?php get_sidebar('primary'); ?>
      </div>


  </div>
</div>









<?php get_footer(); ?>
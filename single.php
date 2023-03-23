<?php

/**
 * Template Name: Post
 * Template Post Type: post
 */

?>


<?php get_header(); ?>


<div class="container single-post-wrapper">
  <div class="row">
	 <div class="col-lg-9">
	    <?php require get_template_directory() . '/components/single-post-content.php';?>
     </div>
	 <div class="col-lg-3 d-lg-block d-none">
	    <?php get_sidebar('primary'); ?>
     </div>
  </div>
</div>





<?php get_footer(); ?>
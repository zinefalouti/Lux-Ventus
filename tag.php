<?php
/**
 * The template for displaying  tag pages
 *
 */

get_header(); 



?>



<!-- The Latests Posts and Sidebar loop Start here -->

<div class="container d-index-wrapper">
   <!-- Category Post Loop and the Primary Sidebar -->
   <div class="row">
      <!-- Left Wing (Posts Loop) -->
      <div class="col-lg-9 col-12 h-100 tag-header">
        <h3>We Have Found: <span>(<?php echo $wp_query->found_posts; ?>)</span> Article(s).</h3>
         <?php require get_template_directory() . '/components/category-loop.php';?>
      </div>
      
      <!-- Right Wing (Sidebar) -->
      <div class="col-lg-3 d-lg-block d-none col-12">
        <?php get_sidebar('primary'); ?>
      </div>


  </div>
</div>



<?php get_footer(); ?>

<?php get_header(); ?>



<!-- The Latests Posts and Sidebar loop Start here -->

<div class="container d-index-wrapper">
   <!-- Category Background Part -->
   <div class="row">
      <div class="col-lg-12 col-12">
          <?php require get_template_directory() . '/components/category-header.php';?>
      </div>
   </div>
   <!-- Category Post Loop and the Primary Sidebar -->
   <div class="row">
      <!-- Left Wing (Posts Loop) -->
      <div class="col-lg-9 col-12 h-100">
         <?php require get_template_directory() . '/components/category-loop.php';?>
      </div>
      
      <!-- Right Wing (Sidebar) -->
      <div class="col-lg-3 d-lg-block d-none col-12">
        <?php get_sidebar('primary'); ?>
      </div>


  </div>
</div>









<?php get_footer(); ?>
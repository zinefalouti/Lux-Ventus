<?php

// This component will fetch all the posts that belong to a target(s) category(ies)

?>

<div class="category-wrapper">

<?php
        // Check if there are any posts in the category
        if ( have_posts() ) :

            // Get the category object
            $category = get_queried_object();

            // Display the category title
            echo '<h1> The Latest From <span> ' . single_cat_title( '', false ) . '</span> </h1>';

?>

<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
?>


<?php


while ( have_posts() ) : the_post();

?>


<?php
// Checking if Post thumbnail exist then storing that variable to use it later on div background css

     $postbg = "get_template_directory_uri();/img/hero-bg.jpg;";

      if (has_post_thumbnail()) { 
        
         $postbg = get_the_post_thumbnail_url(get_the_ID());
        
     } else { 
        
        
     } 



?>




<div class="normal-post"> <!-- Calling the row to split both the area for the thumbnail and the title/excerpt/detail etc -->
  <div class="row h-100">
      <div class="col-lg-5 col-12">
         <?php if (has_post_thumbnail()) { ?>
               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
               <?php the_post_thumbnail('full', array('class' => 'post-thumbnail-v')); ?>
               </a>
         <?php } else { ?>
               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
               <img src="<?php echo get_template_directory_uri(); ?>/img/default-thumb.png" alt="<?php the_title_attribute(); ?>" class="post-thumbnail-v" />
               </a>
         <?php } ?>
         <div class="category-sign-v">
           <?php echo the_category(', '); ?>
         </div>
      </div>

           <?php // Fetching the Author profile picture 


            // Get the post author's ID
            $author_id = get_the_author_meta( 'ID' );

            // Get the avatar image tag for the author
            $avatar = get_avatar( $author_id, 96, '', '', array('class' => 'rounded-circle') ); 

            ?>

      <div class="col-lg-7 col-12">
         <div class="row"> 
           <div class="col-lg-12 col-12 post-head-l">
              <?php echo $avatar; ?>
              <span><?php the_author(); ?></span>
              <span><?php echo get_the_date('F j, Y'); ?></span>
           </div>
         </div>

         <section>
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Learn More</a>
         </section>
      </div>
  </div>
</div>

<?php

endwhile;

?>




<?php
else :

// If no posts were found
echo '<div class="no-posts"><h4> We are sorry!</h4>' . esc_html__( 'No posts found.', 'textdomain' ) . '</div>';
endif;

?>


<?php
     

      the_posts_pagination();

      wp_reset_postdata(); 

?>

</div> <!-- End of Category Wrapper -->



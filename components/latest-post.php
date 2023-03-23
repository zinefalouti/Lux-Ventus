<?php

/* This is a PHP Component that displays only the latest post on full-width as a highlight */
/* To be included in parent */

?>

<?php

$args = array(
	'posts_per_page' => 1, // limit to only 1 post
);
$latest_post = get_posts($args);

foreach ($latest_post as $post) : setup_postdata($post); ?>
     

     <div class="highlight-post">
     <?php if (has_post_thumbnail()) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('full', array('class' => 'post-thumbnail-w')); ?>
        </a>
     <?php } else { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/default-thumb.png" alt="<?php the_title_attribute(); ?>" class="post-thumbnail-w" />
        </a>
     <?php } ?>

          
        <!-- Using the Post category(ies) and negatively margin them up with a higher z-index  -->

        <div class="category-sign-v">
           <?php echo the_category(', '); ?>
        </div>

        <?php // Fetching the Author profile picture 


                  // Get the post author's ID
                  $author_id = get_the_author_meta( 'ID' );

                  // Get the avatar image tag for the author
                  $avatar = get_avatar( $author_id, 96, '', '', array('class' => 'rounded-circle') ); 
                  
       ?>
                            

        
        <!-- This is the area that will display the Author date etc -->

        <div class="row"> 
           <div class="col-lg-8 col-12 post-head-l">
              <?php echo $avatar; ?>
              <span><?php the_author(); ?></span>
              <span><?php echo get_the_date('F j, Y'); ?></span>
           </div>
           <div class="col-lg-4 col-12 post-head-r">
              <span>Coming in hot!</span>
           </div>
        </div>

        <!-- This is the area that will display the post title and excerpt -->

        <section>
          <h1><?php the_title(); ?></h1>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Learn More</a>
        </section>
        
     </div>

<?php endforeach; wp_reset_postdata(); ?>



<?php

// This is a php component that display two posts side by side and created to be included either in a template page or taxonomy//

// Right now it will display the second and third latest posts in the blog //

?>

<div class="row"> <!-- Bootstrap row to split the section in two halves -->

<?php

// Calling the second and third latest posts from WP

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 2,
    'offset' => 1
);
$second_latest_posts = get_posts( $args );

if ( $second_latest_posts ) {
    foreach ( $second_latest_posts as $post ) : setup_postdata( $post );

?>
<div class="col-lg-6 col-12 h-100">
 <div class="highlight-post">
     <?php if (has_post_thumbnail()) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('full', array('class' => 'post-thumbnail-m')); ?>
        </a>
     <?php } else { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/default-thumb.png" alt="<?php the_title_attribute(); ?>" class="post-thumbnail-m" />
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
           <div class="col-md-12 col-sm-12 col-xs-12 post-head-l">
              <?php echo $avatar; ?>
              <span><?php the_author(); ?></span>
              <span><?php echo get_the_date('F j, Y'); ?></span>
           </div>
        </div>

        <!-- This is the area that will display the post title and excerpt -->

        <section>
          <h1><?php the_title(); ?></h1>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Learn More</a>
        </section>
        
      </div>
     </div>

    


<?php
// Loop End Here for the fetched second latest post //
        
endforeach;
wp_reset_postdata();
}

?>




</div> <!-- Main Row Ends Here -->

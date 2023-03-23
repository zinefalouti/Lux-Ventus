<?php

// PHP componenent that fetch the details of each post and display them

// This will be included in the WP single.php

?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- Tags of the Single Post -->
      <div class="single-tags">
         <?php
            $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'textdomain' ) );
            if ( $tags_list ) {
                printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'textdomain' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }
          ?>
       </div>

       <!-- Author, Datetime, and Total Comments -->

       <div class="row">
          <div class="col-lg-10 col-12 post-head-l">
                <?php // Fetching the Author profile picture 
                // Get the post author's ID
                $author_id = get_the_author_meta( 'ID' );

                // Get the avatar image tag for the author
                $avatar = get_avatar( $author_id, 96, '', '', array('class' => 'rounded-circle') ); 

                ?> 
              <?php echo $avatar; ?>
              <span><?php the_author(); ?></span>
              <span><?php echo get_the_date('F j, Y'); ?></span>
          </div>
          <div class="col-lg-2 d-lg-block d-none post-head-r">
              <img src="<?php bloginfo('template_url'); ?>/img/comment-icon.png" class="comment-icon"/>
              <?php echo get_comments_number(0); ?>
          </div>
       </div>

       <!-- Post Title -->
       <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

       
       <!-- Preview Thumbnail -->

       <?php if (has_post_thumbnail()) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('full', array('class' => 'post-thumbnail-w')); ?>
        </a>
       <?php } else { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/default-thumb.png" alt="<?php the_title_attribute(); ?>" class="post-thumbnail-w" />
        </a>
       <?php } ?>


				
       <!-- Single Post Body Starts Here -->
            


			<div class="single-post-body">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

        


   


    <!-- Category(ies) area -->
      <div class="row single-p-category">
        <div class="col-lg-4 col-12">
           <?php echo the_category(', '); ?>
        </div>
        <div class="col-lg-8 col-12 social-share">
          <div class="row">
              <div class="col-lg-6 col-12">
                <span>Let's Share it!</span>
              </div>
              <div class="col-lg-6 col-12">  
                <a href="https://www.facebook.com/sharer/sharer.php?u=<URL>">
                  <img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook Share"/>
                </a>

              
                <a href="https://twitter.com/share?url=<URL>&text=<TEXT>via=<USERNAME>">
                  <img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="Twitter Share"/>
                </a>


                
                <a href="https://www.linkedin.com/shareArticle?url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>">
                  <img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="Linkedin Share"/>
                </a>
              </div>
      
          </div>
        </div>
      </div>







    <!-- Article Next and Previous Navigations -->
    <?php
        $prev_post = get_previous_post();
        if($prev_post):
        $id = $prev_post->ID ;
        $permalink = get_permalink( $id );
        endif;
    ?>
    <?php 
        
        $next_post = get_next_post();
        if($next_post):
        $nid = $next_post->ID ;
        $Npermalink = get_permalink($nid);
        endif;
    ?>
    
    <div class="row post-nav">
        <?php if($prev_post){ // Checking if there is a Previous Post ?>
        <div class="col-lg-6 col-12 alignL">
          <span>Previous Article</span>
          <h2><a href="<?php echo $permalink; ?>"><?php echo $prev_post->post_title; ?></a></h2>
        </div>
        <?php } else { ?>
        <div class="col-lg-6 col-12 alignL">
          <span>No Article!</span>
          <h2>(Sorry! There are no previous articles)</h2>
        </div>
        <?php } ?>

        <?php if($next_post){ //Checking if there is a Nex Post?>
        <div class="col-lg-6 col-12 alignR">
          <span>Next Article</span>
          <h2><a href="<?php echo $Npermalink; ?>"><?php echo $next_post->post_title; ?></a></h2>
        </div>
        <?php } else {  ?>
        <div class="col-lg-6 col-12 alignR">
          <span>No Article!</span>
          <h2>(Sorry! There are no next articles)</h2>
        </div>
        <?php } ?>
    </div>
      

    <!-- Comment Section Starts Here -->
       <div class="post-comment">
		<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
       </div>


</article><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>

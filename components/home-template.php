<?php /* Template Name: Home Page Template */ ?>


<?php get_header(); ?>

<!-- Hero area starts here -->

<style>

/* This style is brought here for the sole reason to make the Hero Background editable by users in the ACF Backend */

.herobg{
    background:url('<?php echo the_field('hero_bg'); ?>') rgba(38, 38, 38, 0.451); 
    background-size:cover;
    background-repeat: no-repeat;
    background-position:center;
    margin-top:25px;
    text-align:left;
    padding:26% 40px 40px 40px;
    min-height:540px;
    border-radius:20px;
    border:none;
    background-blend-mode: multiply;
}

/* End of the Hero Background Styling*/

</style>



<div class="container">
 <div class="row">
   <div class="col-lg-12">
      
       <!-- The Image hero backrgound container -->
       <div class="herobg animate__animated animate__headShake">
            <h4><?php the_field('hero_area_subtitle'); ?></h4>
            <h1><?php the_field('hero_title_normal'); ?> <span id="typing"></span></h1>
            <p>
            <?php the_field('hero_paragraph'); ?>
            </p>
       </div>
      

   </div>
 </div>
</div>


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


<!-- Topic Slider -->
<div class="container topic-slider">
  <div class="row">
    <div class="col-lg-6 col-4 animate__animated animate__headShake">
       <h1><?php the_field('topic_title'); ?></h1>
    </div>
    <div class="col-lg-6 col-8 slider-arrows animate__animated animate__headShake owl-nav">
       <a class="owl-prev owl-nav-link" data-target=".owl-carousel" data-slide="prev"><img src="<?php bloginfo('template_url'); ?>/img/carousel-l.png" alt="carousel left"/></a>
       <a class="owl-next owl-nav-link" data-target=".owl-carousel" data-slide="next"><img src="<?php bloginfo('template_url'); ?>/img/carousel-r.png" alt="carousel right"/></a>
    </div>
  </div> 

  
  
  <div class="row">
     <div class="col-lg-12"> 
          <div class="owl-carousel">
              <?php
                    // Importing all the active created tags
                    $tags = get_tags();
                    foreach ( $tags as $tag ) :
                    
                    $tag_link = get_tag_link( $tag->term_id );
                      
                    $term = get_term_by('id', $tag->term_id, 'post_tag'); 
                  
              ?>

               
                   
                      <div class="topic-card">

                        <img src="<?php  echo the_field('topic_icon',$term); ?>"/>
                        <h1><?php echo $tag->name; ?></h1>
                        <button onClick="location.href='<?php echo $tag_link; ?>'" type="button">View More</button>
                      </div>
                   
                

              <?php  endforeach; // End of fetching all tags and their icons ?>
          </div>   
     </div>    
  </div>
</div>


<!-- The Latests Posts and Sidebar loop Start here -->

<div class="container">
   <div class="row">
      <!-- Left Wing (Posts Loop) -->
      <div class="col-lg-9 col-12 h-100">
         <?php require get_template_directory() . '/components/latest-post.php';?>
         <?php require get_template_directory() . '/components/twin-posts.php';?>
         <?php require get_template_directory() . '/components/post-loop.php';?>
      </div>
      
      <!-- Right Wing (Sidebar) -->
      <div class="col-lg-3 d-lg-block d-none col-12 h-100">
         <?php get_sidebar('primary'); ?>
      </div>


  </div>
</div>



<!-- Owl Js Carousel Options are Initialized Here -->
<script>

jQuery(document).ready(function($){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav: false,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
  });
  $('.owl-prev').click(function() {
    $('.owl-carousel').trigger('prev.owl.carousel');
  });
  $('.owl-next').click(function() {
    $('.owl-carousel').trigger('next.owl.carousel');
  });

   

});


</script>



<?php get_footer(); ?>
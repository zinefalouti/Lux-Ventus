<?php

// This is the template redirect page A.K.A as 404 or Error Page and displays when the users types the wrong URL

?>


<?php get_header(); ?>


<div class="container">
   <div class="row">
      <div class="col-lg-12 col-12 error-page">
          <h1>Ooops!</h1>
          <img src="<?php bloginfo('template_url'); ?>/img/error-icon.png" alt="404 Icon"/>
          <p>
            Sorry! We weren’t able to find an article related to your search.
          </p>
          <button onClick="location.href='<?php echo get_home_url(); ?>'" type="button">Back To Home?</button>
      </div>
   </div>
</div>




<?php get_footer(); ?>
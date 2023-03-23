<?php /* Template Name: Contact Page Template */ ?>

<?php get_header(); ?>

<div class="container">
   
   <!-- Contact Page Header Background Area -->

   <div class="row">
      <div class="col-lg-12">
         <?php require get_template_directory() . '/components/contact-template-header.php';?>
      </div>
   </div>


   <div class="row">
      <!-- Contact Form to be Inserted In this Section -->
      <div class="col-lg-8 col-12">
          <div class="ventus-form">
             <!-- Shortcode or plugin goes here -->
             <h1><?php the_field('contact_form_title'); ?></h1>
             <p>Your email address will not be published. Required fields are marked <span>*</span></p>
             <?php the_field('contact_code'); ?>
          </div>
      </div>
      <!-- Left Side Area with Contact Information -->
      <div class="col-lg-4 col-12">
         <div class="info-block">
             <div class="row">
                <div class="col-lg-4 col-3">
                   <img src="<?php bloginfo('template_url'); ?>/img/email-icon.png" alt="email icon"/>
                </div>
                <div class="col-lg-8 col-9">
                   <div class="info-block-text">
                        <span>Email</span>
                        <p><?php the_field('contact_email'); ?></p>
                   </div>
                </div>
             </div>
         </div>
         <div class="info-block">
             <div class="row">
                <div class="col-lg-4 col-3">
                   <img src="<?php bloginfo('template_url'); ?>/img/phone-icon.png" alt="email icon"/>
                </div>
                <div class="col-lg-8 col-9">
                   <div class="info-block-text">
                        <span>Phone</span>
                        <p><?php the_field('phone_number'); ?></p>
                   </div>
                </div>
             </div>
         </div>
         <div class="info-block">
             <div class="row">
                <div class="col-lg-4 col-3">
                   <img src="<?php bloginfo('template_url'); ?>/img/location-icon.png" alt="email icon"/>
                </div>
                <div class="col-lg-8 col-9">
                   <div class="info-block-text">
                        <span>Location</span>
                        <p><?php the_field('location'); ?></p>
                   </div>
                </div>
             </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>
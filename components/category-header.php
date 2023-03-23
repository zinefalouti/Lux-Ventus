<?php

// This is a component that displays the information related to the category template such as the header and background //

?>

<?php

$category = get_queried_object();

$categorybg = get_field('category_bg',$category);


?>

<?php

// Styling for the div bg similar to the bg from the Home Template

?>

<style>

/* This style is brought here for the sole reason to make the Category Background editable by users in the ACF Backend */

.category-header{
    background:url('<?php echo the_field('category_bg',$category); ?>') rgba(38, 38, 38, 0.451); 
    background-size:cover;
    background-repeat: no-repeat;
    background-position:center;
    margin-top:5px;
    text-align:left;
    padding:14% 40px 40px 40px;
    min-height:340px;
    border-radius:20px;
    border:none;
    background-blend-mode: multiply;
    margin-bottom:25px;
}

/* End of the Category Background Styling*/


</style>




<?php 
    // Checking if the Category Background Img from ACF exists 
    if($categorybg){  ?>

<?php
    // Importing all the active created tags
    
    $totaltag = 0;

    $tags = get_tags();
    foreach ( $tags as $tag ) :

    $totaltag ++;

    endforeach;
                  
?>



    <div class="category-header animate__animated animate__headShake">
        <div class="row">
           <div class="col-lg-6 col-12">
              <span>Category</span>
              <h1><?php echo single_cat_title( '', false ); ?></h1>
           </div>
           <div class="col-lg-6 col-12">
              <div class="tag-total animate__animated animate__rubberBand animate__delay-0.5s">
                 Topics <span><?php echo $totaltag; ?></span>
              </div>
           </div>
        </div>
    </div>

<?php

}else{ ?>

    <!-- If there is no Category Background Image from ACF, then, this area is displayed instead -->

<?php 

} 

?>




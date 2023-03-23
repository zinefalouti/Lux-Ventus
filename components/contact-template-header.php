<?php

// This is a component that displaysthe Contact Template Page Header //

?>

<?php


$contactbg = get_field('contact_bg');


?>

<?php

// Styling for the div bg similar to the bg from the Home Template

?>

<style>

/* This style is brought here for the sole reason to make the Category Background editable by users in the ACF Backend */

.category-header{
    background:url('<?php echo the_field('contact_bg'); ?>') rgba(38, 38, 38, 0.451); 
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
    // Checking if the Contact Background Img from ACF exists 
    if($contactbg){  
        
        
?>

              




    <div class="category-header animate__animated animate__headShake">
        <span>Tell us something</span>
        <h1>Contact Us</h1>
    </div>

<?php

}else{ ?>

    <!-- If there is no Contact Template Background Image from ACF, then, this area is displayed instead -->

<?php 

} 

?>




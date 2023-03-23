<?php 

/* Calling the Footer Sidebar */

?>

<!-- Styling the Footer Sidebar social widget -->

<style>

.footer-social{
    display:flex;
    gap:1rem;
    text-align:right;
    justify-content:right;
}

.footer-social h1{
   color:#262626;
   font-size:26px;
   margin-bottom:10px;
}


@media(max-width:760px) {

    .footer-social{
        text-align:center;
        justify-content:center;
    }

    .wp-social-link{
        width:40px;
        height:40px;
    }

}

</style>


<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<?php dynamic_sidebar( 'footer' ); ?>
	<?php else : ?>
		
        <div class="footer-social">
            <h2>No Widgets!</h2>
        </div>
        
<?php endif; ?>
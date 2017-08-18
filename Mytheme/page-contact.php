<?php

get_header();
?>
<?php get_sidebar('right-1'); ?>
<?php
if (have_posts()) : 
while (have_posts()) : the_post(); ?>
<article >
<h2><?php the_title(); ?></h2>
<div class='info-box1'>
    <h4>Back To Bike NV
    </h4>
    
    <p>
    Back To Bike</br>
    Lisdodde 1, bus 10</br>
    2300 Turnhout</br>
    Belgium</br>
<div class="email">
    info@backtobike.be </br></div>
    (+32) 486 28 13 86
    </p>
        </div>
<?php the_content(); ?>

</article>

<?php endwhile;

else :
echo '<p> No content found </p>';

endif;

get_footer();

?>
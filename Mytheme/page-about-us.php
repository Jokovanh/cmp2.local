<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>
<?php get_sidebar('right-1'); ?>
<article class="post about">
<h2><?php the_title(); ?></h2>

<div class='info-box'>
    <h4>Joko Van Heertum:
    </h4>
    
    <p>Backt to Bike is een klein bedrijf dat ik heb opgericht. 
        Ik ben hiermee een jaar geleden begonnen omdat er zoveer goede en degelijke fietsen soms worden weggegooid.
        Mijn doel is om deze fietsen op te knappen en een nieuw leven te geven.
        Deze verkoop ik aan een degelijke prijs verder.</p>
        </div>
<div class='about'><?php the_content(); ?></div>

</article>

<?php endwhile;

else :
echo '<p> No content found </p>';

endif;

get_footer();

?>
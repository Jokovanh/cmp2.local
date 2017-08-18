<?php

get_header();?>
<?php get_sidebar('right-1'); ?>
<?php if (have_posts()) : 
while (have_posts()) : the_post(); ?>
<article class="post page">
<h2><?php the_title(); ?></h2>
<div class="disclaimer"><?php the_content(); ?></div>

</article>

<?php endwhile;

else :
echo '<p> No content found </p>';

endif;

get_footer();

?>
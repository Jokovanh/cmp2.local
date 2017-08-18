<?php

get_header(); ?>

<?php
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<article class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_post_thumbnail('banner-image'); ?>
<div class="singleside"><?php get_sidebar('right-1'); ?></div>
<div class="single"><?php the_content(); ?></div>
 <?php comments_template(); ?>
 <?php edit_post_link();?>
<?php wp_link_pages(); ?>
</article>

<?php endwhile;

else :
echo '<p> No content found </p>';

endif;
?>

<?php get_sidebar(); ?> 

<?php get_footer();

?>
<?php

/** Template Name: Bikes

*/
?>

<?php

get_header();
?>
<?php get_sidebar('right-1'); ?>
<div class="post-bikes">
<?php 
$args = array(
    'post_type' => 'bikes'
);

$the_query = new WP_Query ($args);
?>

<?php
if($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();
?>

<div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_post_thumbnail(); ?>
<?php the_content('lees meer...'); ?>
<?php endwhile;?>
<?php endif;?>
</div>
<?php

get_footer();

?>
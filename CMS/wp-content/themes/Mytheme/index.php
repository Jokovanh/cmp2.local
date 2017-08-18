

<?php get_header(); ?>

<?php if (have_posts()) : 
while (have_posts()) : the_post(); ?>

  <?php get_sidebar('right-1'); ?>   
<article class="post <?php if (has_post_thumbnail() ) { ?> has-thumbnail <?php } ?>">
    <div class="post-thumbnail">
    <?php the_post_thumbnail('small-thumbnail'); ?> </div> 
 
<div class="title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>



<?php the_content('lees meer...'); ?>

</article>
<div class="react">
 <?php comments_popup_link('Geen reacties', '1 Reactie', '% Reacties');
                            ?> <br>
</div>
<div class="edit">
 <?php edit_post_link();?>
 </div>

<?php endwhile;

else :
echo '<p> No content found </p>';

endif;
?>
<?php echo easy_wp_pagenavigation( $my_query ); ?>

 

<?php get_footer();

?>



// Silence is golden.

<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        the_post();
        //Print the title and the content of the current post
        the_title();
        the_content();
    }
}
else
{
    echo 'No content available';
}
?>

<?php

    echo '<h1>';
    the_title();
    echo '</h1>';
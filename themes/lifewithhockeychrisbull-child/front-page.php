<?php 
/* Template for the front page of Life with Hockey */

//get the header for the front page
get_header();

//peform the wordpress loop to get the content on the front page
while ( have_posts() ) :
    //set the post for wordpress
	the_post();
    //get the template part for content page
	get_template_part( 'template-parts/content/content-page' );
endwhile;

//get the footer for the front page
get_footer();

?>
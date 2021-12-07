<?php 
/* Template Name: About my Life with Hockey Page */ 

//get the header for the About my Life with Hockey page
get_header();

//peform the wordpress loop to get the content on the About my Life with Hockey page
while ( have_posts() ) :
	//set the post for wordpress
	the_post();
	//get the template part for content page
	get_template_part( 'template-parts/content/content-page' );
endwhile;

//get the footer for the About my Life with Hockey page
get_footer();

?>
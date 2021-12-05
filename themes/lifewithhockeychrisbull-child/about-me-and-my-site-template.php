<?php 
/* Template Name: Life with Hockey About me and my Site Page */ 

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

endwhile;

get_footer();

?>
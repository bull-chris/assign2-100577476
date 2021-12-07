<?php
/* Life with Hockey footer php to contain the footer alongside the custom wp_query */

?>
			<!-- add the life with hockey query content to the end of the main content -->
			<?php
			//check for front page plus about my life with hockey page within page.php
			if (is_front_page() || is_page_template("custom_templates/about-my-life-with-hockey.php")) {
				//setup the WP_Query parameters
				$lifeWithHockeyPostParameters = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'orderby' => 'date'
				);

				//create a new WP_Query for the front page and about my life with hockey page
				$lifeWithHockeyPostQuery = new WP_Query($lifeWithHockeyPostParameters);

				?>

				<!-- article to contain the life with hockey custom query posts -->
				<article class="lifeWithHockeyPosts">
					<!-- Posts title -->
					<h2>My three most recent Life with Hockey posts: </h2>
					<?php
					//check if the life with hockey post query has posts
					if($lifeWithHockeyPostQuery->have_posts()) {
						//loop through the life with hockey post query
						while ($lifeWithHockeyPostQuery->have_posts()) {
							//set the post for wordpress
							$lifeWithHockeyPostQuery->the_post();?>
							<!-- div to contain the post information -->
							<div id="lifeWithHockeyIndividualPost">
								<?php the_post_thumbnail(); ?>
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
								<p><a href="<?php the_permalink(); ?>">Go to this Life with Hockey post!</a></p>
							</div>
							<?php
						}
					}?>
				</article>
				<?php
				//reset the loop post data
				wp_reset_postdata();
			}
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->


	<!-- Standard footer content for Life with Hockey site, which uses the same structure as the parent twenty twenty one theme -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->
			<div class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
				);
				?>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

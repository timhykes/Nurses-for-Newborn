<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package nfn
 */

get_header(); ?>

	<?php get_template_part( 'content', 'banner' ); ?>


	<div id="primary" class="content-area page-content-sections">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>

				<section>

					<?php endwhile; // end of the loop. ?>

				
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php get_template_part( 'content', 'sidebar' ); ?>
			

	<section class="clear"></section>

<?php get_footer(); ?>

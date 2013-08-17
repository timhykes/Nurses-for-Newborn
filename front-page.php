<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nfn
 */

get_header(); ?>

<section>
	<img class="main_pic1" src="<?php echo bloginfo('template_directory') . '/images/image1.jpg';?> "/>

	<article id="story">
		<header class="double-title">	
			<h1>OUR STORY</h1>
			<h2>nurses for newborns</h2>
		<header>

		<p>Nurses for Newborns exists to provide a safety net for families most at-risk in order to prevent infant mortality, child abuse and neglect by providing in-home nursing visits which promote healthcare, education, and positive parenting skills. Nurses for Newborns provides services to babies who are born</p>
		<a href="#"><img src="<?php echo bloginfo('template_directory') .'/images/readmore_button.png';?>"/></a>
	</article><!-- end articles -->

	<article id="donate">
		<header class="double-title">
			<h1>DONATE</h1>
			<h2>SUPPORT OUR MISSION</h2>
		<header>

		<p>Your financial support ensures that Nurses for Newborns can continue to transform children from positions of crisis and despair into positions of safety and hope. We are grateful for your generosity. </p>
		<a href="#"><img src="<?php echo bloginfo('template_directory') . '/images/donatenow_button.png';?>"/></a>
	<article><!-- end articles -->

</section><!-- end section -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php nfn_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
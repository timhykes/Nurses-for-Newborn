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
<header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
		<?php putRevSlider( "featured" , 'slider') ?>
		<h1 class="site-title"><a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></h1>
	</div>

	<nav id="site-navigation" class="main-navigation menu-bg" role="navigation">
		<h1 class="menu-toggle"><?php _e( 'Menu', 'nfn' ); ?></h1>
		<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'nfn' ); ?>"><?php _e( 'Skip to content', 'nfn' ); ?></a></div>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->

<div id="content" class="site-content">
<section class="home-featured overflow_hidden">
	<img class="featured_pic_1 float_left" src="<?php echo bloginfo('template_directory') . '/images/image1.jpg';?> "/>

	<article id="about-featured" class="float_left">
		<header class="double-title">	
			<h1>OUR STORY</h1>
			<h2>nurses for newborns</h2>
		<header>

		<p>Nurses for Newborns exists to provide a safety net for families most at-risk in order to prevent infant mortality, child abuse and neglect by providing in-home nursing visits which promote healthcare, education, and positive parenting skills. Nurses for Newborns provides services to babies who are born</p>
		<a href="#"><img src="<?php echo bloginfo('template_directory') .'/images/read_more.svg';?>"/></a>
	</article><!-- end articles -->

	<article id="donate" class="float_left">
		<header class="double-title">
			<h1>DONATE</h1>
			<h2>SUPPORT OUR MISSION</h2>
		<header>

		<p>Your financial support ensures that Nurses for Newborns can continue to transform children from positions of crisis and despair into positions of safety and hope. We are grateful for your generosity. </p>
		<a href="#"><img src="<?php echo bloginfo('template_directory') . '/images/read_more.svg';?>"/></a>
	<article><!-- end articles -->

</section><!-- end featured section -->

<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


<section id="current-news">
	<header class="home-divider-heading">
		<h1>Current News</h1><hr>
	</header>

	<article class="missouri-news float_left overflow_hidden">
		<header class="news-header float_left">
			<h3>Missouri</h3>
		</header>

		<h4>Our New Website</h4>
		<strong>Posted by: admin | 07/10/13</strong>
		<p>Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
		READ MORE >></p>
		<img src="">
	</article>

	<article class="tennessee-news float_left overflow_hidden">
		<header class="news-header float_left">
			<h3>Tennessee</h3>
		</header>

	</article>


</section> <!-- end current news -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
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
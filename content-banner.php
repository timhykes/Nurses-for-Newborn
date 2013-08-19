<?php
/**
 * The template used for displaying menu and banner content in page.php
 *
 * @package nfn
 */
?>

<header id="masthead" class="site-header page-header-style" role="banner">
	<section>
		<div class="site-branding">
			<article class="banner"></article>
			<h1 class="site-title"><a class="page-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></h1>
		</div>

		<nav id="site-navigation" class="main-navigation menu-bg" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'nfn' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'nfn' ); ?>"><?php _e( 'Skip to content', 'nfn' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

	</section>

</header><!-- #masthead -->
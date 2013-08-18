<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package nfn
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div id="login">
			<?php
				if ( is_user_logged_in() ) {
				    echo '<a href="'.wp_logout_url(home_url()).'" title="Logout">Logout</a>';
				} else {
				    echo '<a href="'.wp_login_url().'" title="Login">Login</a>';    
				}
				?>

				  |  <a href="#">staff portal</a>
		</div>

		<?php do_action( 'before' ); ?>
	

			

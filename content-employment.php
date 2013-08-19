<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nfn
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	</section >
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title('permalink'); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_field('general_summary'); ?>
		<?php the_field('minimum_requirements'); ?>
		<?php the_field('missouri_tennesse_job'); ?>
		Download our application - <a href="<?php the_field('application'); ?>">click here</a>
		<p> Please email <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a> for more information.
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nfn' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'nfn' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

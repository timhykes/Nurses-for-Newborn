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
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_field('summary'); ?>
		<section ="report"><a href="<?php the_field('report_document'); ?>"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/pdf.png';?>" /> <p>Download : <?php the_title(); ?></p> </a></section>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nfn' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'nfn' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

<?php if (is_page(array(
						'our-programs',
						'about',
						'our-story',
						'board-bovernance',
						'mission-statement',
						'annual-reports',
						'events',
						'giving',
						'services-programs',
						))) 
						{ ?>
<div id="secondary" class="widget-area sidebar-style" role="complementary">
    <?php dynamic_sidebar('post-donate'); ?>
	<?php dynamic_sidebar('post-volunteer'); ?>
	</div><!-- #secondary -->

    <?php } elseif (is_page()){ ?>

    <?php get_sidebar(); ?>
     <?php } ?>
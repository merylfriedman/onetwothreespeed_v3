<?php get_header(); ?>

	<!-- START: The Loop -->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<!-- <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?> -->
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			
				<!-- <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?> -->

			</div>
			
			<!-- <?php edit_post_link('Edit this entry','','.'); ?> -->
			
		</article>


	<?php endwhile; endif; ?>
	
	<!-- END: The Loop -->
	
<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>
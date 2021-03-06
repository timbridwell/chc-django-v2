<?php get_header(); ?>

	<div id="main" role="main" class="clearfix">
		<div id="wp-main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class('shadow') ?> id="post-<?php the_ID(); ?>">
					
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
						<?php the_tags( 'Tags: ', ', ', ''); ?>
					
						<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

					</div>
					
					<?php edit_post_link('Edit this entry','','.'); ?>
					
				</article>

				<?php comments_template(); ?>

			<?php endwhile; endif; ?>
		</div>
	
		<?php get_sidebar(); ?>
		
	</div>
	<div class="push"></div>
</div>

<?php get_footer(); ?>
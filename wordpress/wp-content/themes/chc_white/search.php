<?php get_header(); ?>

	<div id="main" role="main" class="clearfix">
		<div id="wp-main">
			<?php if (have_posts()) : ?>

				<h2>Search Results</h2>

				<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

				<?php while (have_posts()) : the_post(); ?>

					<article <?php post_class('shadow') ?> id="post-<?php the_ID(); ?>">

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

						<div class="excerpt clearfix">
							<?php the_excerpt(); ?>
						</div>

						<a class="read-more btn-link">Read More +</a>

						<div class="entry" style="display:none">
							<?php the_content(); ?>
						</div>

					</article>

				<?php endwhile; ?>

				<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

			<?php else : ?>

				<h2>No posts found.</h2>

			<?php endif; ?>
		</div>
		
		<?php get_sidebar(); ?>

	</div>
	<div class="push"></div>
</div>

<?php get_footer(); ?>

<div class="news">
	<h2 class="category-headline">News</h2>
	<?php // the query
	$args = array('post_type' => 'post');
	$the_query = new WP_Query( $args ); ?>

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="left">
				<?php if (has_post_thumbnail()): ?>
					<?php echo get_the_post_thumbnail( $page->ID, 'small' ); ?>
				<?php else: ?>
				<?php endif; ?>
			</div>
			<div class="right">
				<h3 class="news-date"><?php the_date( 'd. m. Y' ); ?> </h3>
				<h3 class="news-title"><?php the_title(); ?></h3>
				<p class="news-text"><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="news-link">mehr lesen</a>
				<br class="clear">
			</div>
		</article>
			<?php endwhile; ?>
	<?php endif; ?>
	  <?php wp_reset_postdata(); ?>
</div>

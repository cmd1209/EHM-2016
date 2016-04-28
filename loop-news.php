<div class="news">
	<h1 class="news-header">News</h1>
	<div class="row">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="col col--12-of-12 col--m-1-of-2">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h5 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<!-- <span class="news-date news-date-sidebar"><?php the_date( 'd. m. Y' ); ?> </span> -->
					<?php if (has_post_thumbnail()): ?>
						<?php echo get_the_post_thumbnail( $page->ID, 'small' ); ?>
					<?php else: ?>
					<?php endif; ?>
					<p class="news-text"><?php the_excerpt(); ?></p>
					<br class="clear">
		</article>
	</div>
<?php endwhile; ?>
<?php endif; ?>
	</div>
</div>

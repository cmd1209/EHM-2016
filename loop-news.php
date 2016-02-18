<div class="news">
	<h1 class="news-header">News</h1>
	<?php // the query
	$args = array('post_type' => 'post');
	$the_query = new WP_Query( $args ); ?>
	<div class="row">

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col col--12-of-12 col--m-1-of-2">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3 class="news-date"><?php the_date( 'd/m/Y' ); ?> </h3>
					<h3 class="news-title"><?php the_title(); ?></h3>
					<?php if (has_post_thumbnail()): ?>
						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
						<div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail"></div>
					<?php else: ?>
					<?php endif; ?>
					<p class="news-text"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="news-link">mehr lesen</a>
					<br class="clear">
		</article>
	</div>
<?php endwhile; ?>
<?php endif; ?>
	</div>
	  <?php wp_reset_postdata(); ?>
</div>

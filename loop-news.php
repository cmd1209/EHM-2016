<div class="news">
	<h1 class="news-header">News</h1>
	<div class="row">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="col col--12-of-12 col--m-1-of-2">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (has_post_thumbnail()): ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
				<div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail"></div>
			<?php else: ?>
			<?php endif; ?>
					<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="news-date news-date-sidebar"><?php the_date( 'd. m. Y' ); ?> </span>
					<p class="news-text"><?php the_excerpt(); ?></p>
					<br class="clear">
		</article>
	</div>
<?php endwhile; ?>
<?php endif; ?>
	</div>
</div>

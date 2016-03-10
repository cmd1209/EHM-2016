<div class="col col--4-of-12">
	<?php $i = 0; if (have_posts() ) : while (have_posts() ) :the_post();  if ($i % 3 == 0): ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (has_post_thumbnail()): ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
				<div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail thumbnail-tall"></div>
			<?php else: ?>
			<?php endif; ?>
			<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<span class="news-date"><?php the_date( 'd/m/Y' ); ?> </span>
			<p class="news-text"><?php the_excerpt(); ?></p>
			<br class="clear">
		</article>
	<?php  endif; $i++; ?>
<?php endwhile; endif; ?>
</div>
<div class="col col--4-of-12">
	<?php $i = 0; if (have_posts() ) : while (have_posts() ) :the_post();  if ($i % 3 == 1): ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (has_post_thumbnail()): ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
				<div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail thumbnail-tall"></div>
			<?php else: ?>
			<?php endif; ?>
					<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="news-date"><?php the_date( 'd/m/Y' ); ?> </span>
					<p class="news-text"><?php the_excerpt(); ?></p>
					<br class="clear">
		</article>
	<?php  endif; $i++; ?>
	<?php endwhile; endif; ?>
</div>
<div class="col col--4-of-12">
	<?php $i = 0; if (have_posts() ) : while (have_posts() ) :the_post();  if ($i % 3 == 2): ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (has_post_thumbnail()): ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
				<div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail thumbnail-tall"></div>
			<?php else: ?>
			<?php endif; ?>
					<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="news-date"><?php the_date( 'd/m/Y' ); ?> </span>
					<p class="news-text"><?php the_excerpt(); ?></p>
					<br class="clear">
		</article>
	<?php  endif; $i++; ?>
	<?php endwhile; endif; ?>

</div>

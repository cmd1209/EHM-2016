<div class="col col--4-of-8">
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>
<div class="news">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h3 class="news-date"><?php the_date( 'm/d/Y' ); ?> </h3>
<h3 class="news-title"><?php the_title(); ?></h3>
<?php if (has_post_thumbnail()): ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );?>
	<div style="background:url('<?php echo $thumb['0'];?>')center center;" class="news-thumbnail"></div>
<?php else: ?>
<?php endif; ?>
<p class="news-text"><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" class="news-link">mehr lesen</a>
<br class="clear">
</article>
</div>
<?php endif; endwhile; else: ?>
<div>Alternate content</div>
<?php endif; ?>
</div>

<?php $i = 0; rewind_posts(); ?>

<div class="col col--4-of-8">
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>
<div class="news">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h3 class="news-date"><?php the_date( 'm/d/Y' ); ?> </h3>
<h3 class="news-title"><?php the_title(); ?></h3>
<?php if (has_post_thumbnail()): ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );?>
	<div style="background:url('<?php echo $thumb['0'];?>')center center;" class="news-thumbnail"></div>
<?php else: ?>
<?php endif; ?>
<p class="news-text"><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" class="news-link">mehr lesen</a>
<br class="clear">
</article>
</div>
<?php endif; endwhile; else: ?>
<div>Alternate content</div>
<?php endif; ?>

</div>

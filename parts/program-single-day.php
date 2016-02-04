<div class="news">
  <h2 class="category-headline"><?php printf(eo_get_the_start("j F, Y")); ?></h2>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="left">
      <?php if (has_post_thumbnail()): ?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );?>
        <div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail"></div>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <div class="right">
      <h3 class="news-date"><?php printf(eo_get_the_start("G:i")); ?> - <?php printf(eo_get_the_end("G:i")); ?> </h3>
      <h3 class="news-title"><?php the_title(); ?></h3>
      <p class="news-text"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="news-link">mehr lesen</a>
      <br class="clear">
    </div>
</article>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</div>

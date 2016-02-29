<h2 class="category-headline"><?php printf(eo_get_the_start("j F, Y")); ?></h2>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <span class="news-date"><?php printf(eo_get_the_start("G:i")); ?> - <?php printf(eo_get_the_end("G:i")); ?> </span>
      <?php if (has_post_thumbnail()): ?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );?>
        <div style="background:url('<?php echo $thumb['0'];?>')no-repeat center center;" class="news-thumbnail"></div>
      <?php else: ?>
      <?php endif; ?>
      <h3 class="news-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p class="news-text"><?php the_content(); ?></p>

</article>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
